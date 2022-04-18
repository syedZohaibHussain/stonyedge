<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineUserInfo extends Model
{
    use HasFactory;
    public $table='online_order_user_info';
public $guarded=[''];
}
