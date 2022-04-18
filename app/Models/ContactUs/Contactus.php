<?php

namespace App\Models\ContactUs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;
    public $table='contact_us';
    public $guarded=[''];
}
