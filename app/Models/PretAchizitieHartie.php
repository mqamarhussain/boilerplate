<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PretAchizitieHartie extends Model
{
    use HasFactory;

    protected $table = 'preturi-hartie';

    protected $fillable = [
        
        'dimensiune',
        'tip',
        'grosime',
        'categorie',
        'furnizor',
        'pret_top',
        'coli_top',
        'pret_coala',
    ];
    

}
