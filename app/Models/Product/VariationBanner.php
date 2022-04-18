<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariationBanner extends Model
{
    use HasFactory;
    public $table='product_variation_banner';
    public $guarded=[''];
}
