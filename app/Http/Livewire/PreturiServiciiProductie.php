<?php

namespace App\Http\Livewire;

use App\Models\PreturiProductie;
use Livewire\Component;

class PreturiServiciiProductie extends Component
{
    public $denumire;
    public $categorie;
    public $tip_serviciu;
    public $intern;
    public $externalizat;
    public $lungime;
    public $latime;
    public $grosime;
    public $unitate_masura;
    public $pret_unitar;

    protected $rules = [
        'denumire' => 'required|string',
        'categorie' => 'required|string',
        'tip_serviciu' => 'required|string',
        'intern' => 'required|string',
        'externalizat' => 'required|string',
        'lungime' => 'required|numeric',
        'latime' => 'required|numeric',
        'grosime' => 'required|numeric',
        'unitate_masura' => 'required|string',
        'pret_unitar' => 'required|numeric',
    ];

    public function save()
    {
        $this->validate();
       
        
        $pcp = new PreturiProductie;
        $pcp->denumire = $this->denumire;
        $pcp->categorie = $this->categorie;
        $pcp->tip_serviciu = $this->tip_serviciu;
        $pcp->intern = $this->intern;
        $pcp->externalizat = $this->externalizat;
        $pcp->lungime = $this->lungime;
        $pcp->latime = $this->latime;
        $pcp->grosime = $this->grosime;
        $pcp->unitate_masura = $this->unitate_masura;
        $pcp->aria = $this->calculeazaaria();
        $pcp->pret_unitar = $this->pret_unitar;
        $pcp->pret_cm2 = $this->calculeazaPretCm2();
        $pcp->save();

        session()->flash('message', 'Date salvate cu succes!');
        $this->reset();
    }

    // Calculăm aria în cm^2
    public function calculeazaaria()
    {

        $ariacm = $this->lungime * $this->latime;

        return round($ariacm, 4);
    }

    // Calculăm pretul pe cm2
    public function calculeazaPretCm2()
    {
        $pretcm2 = $this->pret_unitar / $this->calculeazaaria();
        return number_format($pretcm2, 4, '.', '');
    }
    

    public function render()
    {
        $PreturiServiciiProductie = PreturiProductie::all();

        return view('livewire.preturi-servicii-productie', [
        'PreturiServiciiProductie' => $PreturiServiciiProductie

        ]);
    }
}



