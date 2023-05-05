<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriePrima extends Model
{
    use HasFactory;

    protected $table = 'materii_prime';

    protected $fillable = ['nume_produs','categorie', 'furnizor', 'um', 'grosime', 'lungime', 'latime', 'pret', 'mp', 'pret_pe_cm2'];
}
