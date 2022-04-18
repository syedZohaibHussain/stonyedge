<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Category\Categories;
use App\Models\Product\ProductImages;
use App\Models\Product\VariationDetails;
use App\Models\Product\VariationImage;
use App\Models\Promotion\Promotion;



class ProductDetails extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $products = Product::where('slug',$id)->first();
        if($products != null){
        $variations = VariationDetails::where('product_id',$products->id)->get();
        $productImages = ProductImages::where('product_id',$products->id)->take(10)->get();
        $categories = Categories::where('cat_id',$products->category_id)->first();
        $recommended = Product::where('category_id',$categories->cat_id)->get();
        $reviews = Promotion::all();
        return view('frontend.productdetails',compact('products','recommended','categories','productImages','variations','reviews'));
        }
        $products = VariationDetails::where('v_slug',$id)->first();
        if($products != null){
        $variations = VariationDetails::where('product_id',$products->product_id)->get();
        $productImages = VariationImage::where('variation_id',$products->variation_id)->take(10)->get();
        $pro = Product::where('id',$products->product_id)->first();
        $categories = Categories::where('cat_id',$pro->category_id)->first();
        $recommended = Product::where('category_id',$categories->cat_id)->get();
         $reviews = Promotion::all();
        return view('frontend.variationdetails',compact('products','productImages','variations','recommended','categories','reviews'));
        }
        
    }
     public function variation($id)
    {
        
     
        $products = VariationDetails::where('variation_id',$id)->first();
        $variations = VariationDetails::where('product_id',$products->product_id)->get();
        $productImages = VariationImage::where('variation_id',$id)->take(10)->get();
        $pro = Product::where('id',$products->product_id)->first();
        $categories = Categories::where('cat_id',$pro->category_id)->first();
        $recommended = Product::where('category_id',$categories->cat_id)->get();
         $reviews = Promotion::all();
        return view('frontend.variationdetails',compact('products','productImages','variations','recommended','categories','reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
