<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreturiMagazin extends Model
{
    use HasFactory;

    protected $table = 'preturi-magazin';

    protected $fillable = ['id','denumire','categorie', 'descriere', 'echipament', 'um', 'furnizor', 'pret', 'stoc'];
}
