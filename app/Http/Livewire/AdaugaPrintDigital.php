<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PrintDigital;

class AdaugaPrintDigital extends Component
{
    public $dimensiune;
    public $unitateMasura;
    public $tipHartie;
    public $gramaj;
    public $tipPrint;
    public $pretBucat;
    public $pret100;
    public $pret250;
    public $pret500;
    public $pret1000;
    public $pret1500;
    public $pret2000;
    public $pret2500;
    public $printDigitals;

    protected $rules = [
        'dimensiune' => 'required',
        'unitateMasura' => 'required',
        'tipHartie' => 'required',
        'gramaj' => 'required|numeric',
        'tipPrint' => 'required',
        'pretBucat' => 'required|numeric',
        'pret100' => 'nullable|numeric',
        'pret250' => 'nullable|numeric',
        'pret500' => 'nullable|numeric',
        'pret1000' => 'nullable|numeric',
        'pret1500' => 'nullable|numeric',
        'pret2000' => 'nullable|numeric',
        'pret2500' => 'nullable|numeric',
    ];

    public function saveData()
    {
        $this->validate();
    
        $pd = new PrintDigital();
        $pd->dimensiune = $this->dimensiune;
        $pd->unitate_masura = $this->unitateMasura;
        $pd->tip_hartie = $this->tipHartie;
        $pd->gramaj = $this->gramaj;
        $pd->tip_print = $this->tipPrint;
        $pd->pret_bucat = $this->pretBucat;
    
        $adaos_100 = 3; // 300%
        $adaos_250 = 2.5; // 250%
        $adaos_500 = 2; // 200%
        $adaos_1000 = 1.5; // 150%
        $adaos_1500 = 1.3; // 130%
        $adaos_2000 = 1.15; // 115%
        $adaos_2500 = 0.7; // 70%
        
        $pd->pret_100 = $this->pretBucat * (1 + $adaos_100);
        $pd->pret_250 = $this->pretBucat * (1 + $adaos_250);
        $pd->pret_500 = $this->pretBucat * (1 + $adaos_500);
        $pd->pret_1000 = $this->pretBucat * (1 + $adaos_1000);
        $pd->pret_1500 = $this->pretBucat * (1 + $adaos_1500);
        $pd->pret_2000 = $this->pretBucat * (1 + $adaos_2000);
        $pd->pret_2500 = $this->pretBucat * (1 + $adaos_2500);
        
        

    
        $pd->save();
    
        session()->flash('message', 'Datele au fost adăugate cu succes!');
    
        $this->reset();
    }
    

    

    public function mount()
    {
        $this->printDigitals = PrintDigital::all();
    }

    public function render()
    {
        return view('livewire.adauga-print-digital');
    }
}
