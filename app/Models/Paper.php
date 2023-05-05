<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'dimensions',
        'paper_type_id',
        'length',
        'paper_category_id',
        'provider',
        'top_price',
        'top_coli',
        'top_coala',
    ];

    public function paper_category()
    {
        return $this->belongsTo(PaperCategory::class);
    }

    public function paper_type()
    {
        return $this->belongsTo(PaperType::class);
    }

}
