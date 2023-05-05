<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreturiProductie extends Model
{
    use HasFactory;

    protected $table = 'preturi_productie';

    protected $fillable = [
        'denumire',
        'categorie',
        'tip_serviciu', 
        'intern', 
        'externalizat', 
        'lungime', 
        'latime', 
        'grosime', 
        'unitate_masura', 
        'aria', 
        'pret_unitar', 
        'pret_cm2'
    ];
}
