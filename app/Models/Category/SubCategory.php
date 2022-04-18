<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category\ChildSubCategory;
use App\Models\Category\Categories;

class SubCategory extends Model
{
    use HasFactory;
    public $table='category_condition';
    public $guarded=[''];

    public function subchildcategories()
    {
        return $this->hasMany('App\Models\Category\ChildSubCategory');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category\Categories');
    }
}
