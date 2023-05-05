<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalPrintingResult extends Model
{
    use HasFactory;

    protected $fillable = [
        "paper_type_id",
        "dimensions",
        "paper_thickness",
        "sides",
        "quantity",
        "discount",
        "total_cost",
    ];
}
