<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category\SubCategory;

class Categories extends Model
{
    use HasFactory;
    public $table='categories';
    public $guarded=[''];

/**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'cat_id';
    public function subcategories()
    {
        return $this->hasMany('App\Models\Category\SubCategory');
    }
    public function parent()
    {
    	return $this->belongsTo('App\Models\Category\Categories','parent_id','cat_id');
    }
     public function child()
    {
    	return $this->hasMany('App\Models\Category\Categories','parent_id','cat_id');
    }
}
