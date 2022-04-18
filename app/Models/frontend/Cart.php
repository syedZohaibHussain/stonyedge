<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
        public $table='carts';
public $guarded=[''];
/**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'cart_id';
public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function product()
    {
        return $this->hasOne('App\Models\Product\Product');
    }
}

