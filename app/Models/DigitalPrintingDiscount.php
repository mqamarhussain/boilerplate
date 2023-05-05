<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalPrintingDiscount extends Model
{
    use HasFactory;

    protected $fillable = [
        'min_quantity',
        'max_quantity',
        'discount_percent',
    ];
}
