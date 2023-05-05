<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintDigital extends Model
{
    use HasFactory;

    protected $table = 'print_digital';

    protected $fillable = [
        'dimensiune',
        'unitate_masura',
        'tip_hartie',
        'gramaj',
        'tip_print',
        'pret_bucat',
        'pret_100',
        'pret_250',
        'pret_500',
        'pret_1000',
        'pret_1500',
        'pret_2000',
        'pret_2500',
    ];
}
