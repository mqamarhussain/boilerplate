<?php

namespace App\Http\Livewire;

use App\Models\MateriePrima;
use Livewire\Component;

class MateriiPrime extends Component
{
    public $nume_produs;
    public $furnizor;
    public $categorie;
    public $um;
    public $grosime;
    public $lungime;
    public $latime;
    public $pret;
    
    
    public function getMateriiPrimeLemn()
    {
        return MateriePrima::where('categorie', 'lemn')->get();
    }

    public function index()
    {
        $materiiPrimeLemn = MateriePrima::where('categorie', 'lemn')->get();
        return view('calculatoare.lemn', compact('materiiPrimeLemn'));
    }

    protected $rules = [
        'nume_produs' => 'required|string',
        'categorie' => 'required|string',
        'furnizor' => 'required|string',
        'um' => 'required|string',
        'grosime' => 'required|numeric',
        'lungime' => 'required|numeric',
        'latime' => 'required|numeric',
        'pret' => 'required|numeric',
    ];


    public function save()
    {
        $this->validate();
    
        $mp = new MateriePrima();
        $mp->nume_produs = $this->nume_produs;
        $mp->categorie = $this->categorie;
        $mp->furnizor = $this->furnizor;
        $mp->um = $this->um;
        $mp->grosime = $this->grosime;
        $mp->lungime = $this->lungime;
        $mp->latime = $this->latime;
        $mp->mp = $this->calculeazaMP();
        $mp->pret = $this->pret;
        $mp->pret_pe_cm2 = $this->calculeazaPretPeCm2(); // apelăm metoda pentru a calcula prețul pe cm2
        $mp->save();
    
        session()->flash('message', 'Materie prima adăugată cu succes!');
    
        $this->reset();
    }

    

    public function calculeazaMP()
    {

        // Calculăm aria în cm^2
        $aria_cm2 = $this->lungime * $this->latime;

        return round($aria_cm2, 4);
    }
    
    public function calculeazaPretPeCm2()
    {
        $pretPeCm2 = $this->pret / $this->calculeazaMP();
        return number_format($pretPeCm2, 4, '.', '');
    }


    public function render()
    {
        $materiiPrime = MateriePrima::all();
        $materiiPrimeLemn = $this->getMateriiPrimeLemn();
    
        return view('livewire.materii-prime', [
            'materiiPrime' => $materiiPrime,
        ]);
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function stergeProdus($id)
    {
        $sterge = MateriePrima::findOrFail($id);
        $sterge->delete();
        session()->flash('message', 'Pretul a fost șters cu succes!');
    }

    public function edit($id)
    {
         $actualizeaza = MateriePrima::findOrFail($id);
         $this->id = $id;
         $this->nume_produs = $actualizeaza-> nume_produs;
         $this->categorie = $actualizeaza-> categorie;
         $this->furnizor = $actualizeaza-> furnizor;
         $this->um = $actualizeaza-> um;
         $this->grosime = $actualizeaza-> grosime;
         $this->lungime = $actualizeaza-> lungime;
         $this->latime = $actualizeaza-> latime;
         $this->pret = $actualizeaza-> pret;
       
         
     }
    

    
}
