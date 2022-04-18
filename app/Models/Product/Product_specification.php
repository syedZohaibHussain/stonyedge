<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_specification extends Model
{
    use HasFactory;
    public $table='product_specification';
    public $guarded=[''];
}
