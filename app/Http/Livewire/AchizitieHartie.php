<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PretAchizitieHartie;


class AchizitieHartie extends Component
{
    public $dimensiune;
    public $tip;
    public $grosime;
    public $categorie;
    public $furnizor;
    public $pret_top;
    public $coli_top;
    public $pret_coala; 


    

    protected $rules = [
        'dimensiune' => 'required',
        'tip' => 'required',
        'grosime' => 'required|numeric',
        'categorie' => 'required',
        'furnizor' => 'required',
        'pret_top' => 'required|numeric',
        'coli_top' => 'required|numeric',

    ];

    public function salveazaHartie()
{
   
    $this->validate();

    $ha = new PretAchizitieHartie();
    $ha->dimensiune = $this->dimensiune;
    $ha->tip = $this->tip;
    $ha->grosime = $this->grosime;
    $ha->categorie = $this->categorie;
    $ha->furnizor = $this->furnizor;
    $ha->pret_top = $this->pret_top;
    $ha->coli_top = $this->coli_top;
    $ha->pret_coala = $this-> calculpretcoala(); // calculam pret coala
    $ha->save();
    
    session()->flash('message', 'Datele au fost adăugate cu succes!');

    $this->reset();
}

public function calculpretcoala()
{
    // Calculăm pret coala cu TVA inclus
    $pret_coala = $this->pret_top / $this->coli_top;
    $pret_coala_tva = $pret_coala * 1.19;

    return number_format($pret_coala_tva, 4, '.', '');
}



    public function render()
    {
        $afiseazaHartie = PretAchizitieHartie::all();

        return view('livewire.achizitie-hartie', [
            'afiseazaHartie' => $afiseazaHartie
        ]);
        
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function stergeProdus($id)
    {
        $sterge = PretAchizitieHartie::findOrFail($id);
        $sterge->delete();
        session()->flash('message', 'Pretul a fost șters cu succes!');
    }
}

