<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category\SubCategory;

class ChildSubCategory extends Model
{
    use HasFactory;
    public $table='childsubcategories';
    public $guarded=[''];

    public function subcategory()
    {
        return $this->belongsTo('App\Models\Category\SubCategory');
    }

}
