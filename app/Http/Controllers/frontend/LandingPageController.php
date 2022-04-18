<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\ProductBanner;
use App\Models\Product\ProductImages;
use App\Models\Product\Product_specification;
use App\Models\Category\Categories;
use App\Models\Frontendsetting\Menusetting;
use App\Models\Brands\Brands;
use App\Models\Frontendsetting\SliderImage;
use App\Models\Frontendsetting\Categoryslider;
use App\Models\Frontendsetting\Homeslider;
use App\Models\Specifications\Specification;
use App\Models\Brands\Selected_brands;
use DB;
class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $cat_sliders = Categoryslider::where('is_active',1)->get();
         // $banners = Homeslider::where('is_active',1)->get();
         // $sliders = DB::table('slider_details')->select('*','slider_details.id as ids')
         // ->join('product_sliders','product_sliders.id','=','slider_details.product_sliders_id')
         // ->join('section_layouts','section_layouts.id','=','slider_details.section_layout_id')
         // ->get();
         // $images = SliderImage::all();
         $products = Product::where('is_active',1)->get();
         // $menus = Menusetting::where('is_active',1)->get();
         $categories = Categories::all();
         // $selected = Selected_brands::all();
         // $brands = Brands::all();
         return view('frontend/index',compact('categories','products'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function show($id)
    {
        }
    // productdetail show
    public function productDetail($id)
    {

//  $products=DB::table('products')->select('*')
//          ->join('product_images','product_images.product_id','=','products.id')
//           ->where('products.id','=',$id)
//          ->get();
//          dd($products);
// foreach ($products as $value) {
//     dd($value->thumbnail_url);
// }
          $categories = Categories::all();
        $brands = Brands::all();
        $banners=ProductBanner::all();
        $productImages=ProductImages::where('product_id',$id)->take(4)->get();
        // dd($productImages);
        $products = Product::where('id',$id)->first();
        $specifications = Product_specification::where('product_id',$id)->get();
        return view('frontend/productDetail',compact('categories','brands','products','specifications','banners','productImages')); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
