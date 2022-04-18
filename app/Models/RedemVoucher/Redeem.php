<?php

namespace App\Models\RedemVoucher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redeem extends Model
{
    use HasFactory;
    public $table='redeem_vouchers';
    public $guarded=[''];
}
