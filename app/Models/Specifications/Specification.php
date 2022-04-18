<?php

namespace App\Models\Specifications;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;
    public $table='specifications';
    public $guarded=[''];
}
