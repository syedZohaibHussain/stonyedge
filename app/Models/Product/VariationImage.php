<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariationImage extends Model
{
    use HasFactory;
    public $table='product_variation_images';
    public $guarded=[''];
    
}
