<?php

namespace App\Models\Brands;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selected_brands extends Model
{
    use HasFactory;
    public $table='selected_brands';
    public $guarded=[''];
}
