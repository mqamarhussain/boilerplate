<?php

namespace App\Http\Livewire;

use App\Models\DigitalPrintingCost;
use App\Models\DigitalPrintingDiscount;
use App\Models\DigitalPrintingResult;
use App\Models\Paper;
use App\Models\PaperType;
use App\Models\PreturiProductie;
use Livewire\Component;

class PrintDigital extends Component
{
    public $format;
    public $paper_type = '';
    public $paper_thickness = '';
    public $cost;
    public $quantity = 0;
    public $discount = 0;
    public $sides;

    public $productionCost = 0;

    public Paper $paper;

    public $paper_type_dropdown = [];
    public $formats_dropdown = [];
    public $paper_thickness_dropdown = [];
   
    public $variations = [];

    protected $listeners = [
            'getFormatesByPaperType',
            'getThicknessByFormat',
        ];

    public function mount()
    {
        $this->format = '';
        $this->paper_type = '';
        $this->paper_thickness = '';
        $this->cost = '';
        $this->paper_type_dropdown = PaperType::select(['id', 'name'])->get();   
    }

    public function hydrate()
        {
            $this->dispatchBrowserEvent('render-select2');
        }

    protected $rules = [
        'paper_type' => 'required',
        'format' => 'required',
        'paper_thickness' => 'required',
        'sides' => 'required',
        'quantity' => 'required|numeric|gt:0'
    ];


    public function calculateCost()
    {
        $this->validate();
        $cost = 0; // Definim variabila $cost cu valoarea initiala 0
        
        $paper = Paper::where('dimensions', $this->format)
                              ->where('paper_type_id', $this->paper_type)
                              ->where('thickness', $this->paper_thickness)
                              ->first();

        if (!$paper) {
            $this->notify(["title" => "Something went wrong", "message" => "Paper was not found!", "type" => "warning"]);
            return;
        }

        $DigitalPrintingCost = DigitalPrintingCost::where('format', $this->format)
                              ->first();

        if (!$DigitalPrintingCost) {
            $this->notify(["title" => "Sorry! Something went wrong!", "message" => "Producting cost was not found!", "type" => "warning"]);
            return;
        }
            $price = $paper->top_coala;

            $this->productionCost = $DigitalPrintingCost->unit_price;
            if($this->sides == 2){
                $this->productionCost *= $this->productionCost;
            }
            $cost = $price + $this->productionCost;
            $cost *= $this->quantity;
            $discount = DigitalPrintingDiscount::where('min_quantity', '<=',  $this->quantity)
                        ->where('max_quantity', '>=',  $this->quantity)->first();

            if ($discount){
                $discount_percent = $discount->discount_percent;
                $discount = $cost*($discount_percent/100);
                $cost = $cost - $discount;

                $this->discount = $discount;
            }

            $this->cost = $cost;

            DigitalPrintingResult::create([
                "paper_type_id" => $this->paper_type,
                "dimensions" => $this->format,
                "paper_thickness" => $this->paper_thickness,
                "sides" => $this->sides,
                "quantity" => $this->quantity,
                "discount" => $this->discount,
                "total_cost" => $this->cost,
            ]);

            $this->reset([
                "paper_type",
                "format",
                "paper_thickness",
                "sides",
                "quantity",
                "discount",
            ]);
        $this->notify(["title" => "Record saved", "message" => "record is been saved", "type" => "success"]);

    }

    public function render()
    {
        return view('livewire.print-digital');
    }

    public function getFormatesByPaperType()
    {
        $this->formats_dropdown = Paper::select(['id','dimensions', 'thickness'])
                                    ->where(['paper_type_id' => $this->paper_type])
                                    ->distinct()
                                    ->get();
         $this->reset('format', 'paper_thickness');
    }

    public function getThicknessByFormat()
    {
        $this->paper_thickness_dropdown = Paper::select(['id','dimensions', 'thickness'])
                                    ->where(['paper_type_id' => $this->paper_type])
                                    ->where(['dimensions' => $this->format])
                                    ->distinct()
                                    ->get();
    }

    public function updatedPaperThickness()
    {
        $DigitalPrintingCost = DigitalPrintingCost::where('format', $this->format)
                              ->first();

        if (!$DigitalPrintingCost) {
            $this->notify(["title" => "Sorry! Something went wrong!", "message" => "Producting cost was not found!", "type" => "warning"]);
            return;
        }

            $this->productionCost = $DigitalPrintingCost->unit_price;
    }

    public function updatedSides()
    {
        // code...
    }
}
