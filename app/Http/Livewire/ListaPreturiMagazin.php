<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PreturiMagazin;

class ListaPreturiMagazin extends Component
{
    public $denumire;
    public $categorie;
    public $descriere;
    public $echipament;
    public $um;
    public $furnizor;
    public $pret;
    public $stoc;





    protected $rules = [
        'denumire' => 'required',
        'categorie' => 'required',
        'descriere' => 'required',
        'echipament' => 'required',
        'um' => 'required',
        'furnizor' => 'required',
        'pret' => 'required|numeric',
        'stoc' => 'required',
    ];

    public function saveData()
    {
        $this->validate();
    
        $pm = new PreturiMagazin();
        $pm->denumire = $this->denumire;
        $pm->categorie = $this->categorie;
        $pm->descriere = $this->descriere;
        $pm->echipament = $this->echipament;
        $pm->um = $this->um;
        $pm->furnizor = $this->furnizor;
        $pm->pret = $this->pret;
        $pm->stoc = $this->stoc;
        $pm->save();
    
        session()->flash('message', 'Pretul a fost adăugat cu succes!');
    
        $this->reset();
    }




    public function render()
    {
        $preturiMagazin = PreturiMagazin::all();

        return view('livewire.lista-preturi-magazin', [
            'preturiMagazin' => $preturiMagazin
        ]);


    }
    
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function stergeProdus($id)
    {
        $sterge = PreturiMagazin::findOrFail($id);
        $sterge->delete();
        session()->flash('message', 'Pretul a fost șters cu succes!');
    }

    public function edit($id)
    {
         $actualizeaza = PreturiMagazin::findOrFail($id);
         $this->id = $id;
         $this->denumire = $actualizeaza-> denumire;
         $this->categorie = $actualizeaza-> categorie;
         $this->descriere = $actualizeaza-> descriere;
         $this->echipament = $actualizeaza-> echipament;
         $this->um = $actualizeaza-> um;
         $this->furnizor = $actualizeaza-> furnizor;
         $this->pret = $actualizeaza-> pret;
         $this->stoc = $actualizeaza-> stoc;
       
         
     }
    
    
}
