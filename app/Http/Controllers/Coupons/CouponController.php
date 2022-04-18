<?php

namespace App\Http\Controllers\Coupons;

use App\Http\Controllers\Controller;
use App\Models\Coupons\Coupon;
use App\Models\Coupons\CouponCategory;
use App\Models\Coupons\CouponProduct;
use App\Models\Category\Categories;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $products = Product::all();
        $categories = Categories::all();
        $coupons = Coupon::all();
        return view('coupons/couponlist',compact('coupons','products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $categories = Categories::all();
            return view('coupons/addcoupon',compact('products','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $data = array(
        'code' => $request->code, 
        'discount_type'  => $request->discount_type,
        'min_spend'     =>$request->min_spend,
        'coupon_amount' => $request->coupon_amount,
        'expiry_date' => $request->expiry_date,
       );
       
         $last_coupon_id = Coupon::Create($data)->id;
         
         
    $category = $request->coupon_category;
    if($category != null){
    for($count = 0; $count < count($category); $count++){
    if($category[$count] != null) {
      
        $data = array(
        'coupon_id' => $last_coupon_id,
        'category_id'  => $category[$count],
       );
         CouponCategory::insert($data);
    }
    }
    }
    $product = $request->coupon_product;
    if($product != null){
    for($count = 0; $count < count($product); $count++){
    if($product[$count] != null) {
      
        $data = array(
        'coupon_id' => $last_coupon_id,
        'product_id'  => $product[$count],
       );
         CouponProduct::insert($data);
    }
    }
    }
         return redirect('listcoupon')->with('msg','Coupon Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupons\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupons\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupons\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
     

        $data = array(
        'code' => $request->code, 
        'discount_type'  => $request->discount_type,
        'min_spend'     =>$request->min_spend,
        'coupon_amount' => $request->coupon_amount,
        'expiry_date' => $request->expiry_date,
        );
        Coupon::where('id',$id)->update($data);
        $category = $request->coupon_category;
    if($category != null){
    for($count = 0; $count < count($category); $count++){
    if($category[$count] != null) {
      
        $data = array(
        'coupon_id' => $id,
        'category_id'  => $category[$count],
       );
         CouponCategory::insert($data);
    }
    }
    }
    $product = $request->coupon_product;
    if($product != null){
    for($count = 0; $count < count($product); $count++){
    if($product[$count] != null) {
      
        $data = array(
        'coupon_id' => $id,
        'product_id'  => $product[$count],
       );
         CouponProduct::insert($data);
    }
    }
    }
        return redirect('listcoupon')->with('msg','Coupon Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupons\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon,$id)
    {
       Coupon::destroy(array('id',$id));
       CouponCategory::destroy(array('coupon_id',$id));
       CouponProduct::destroy(array('coupon_id',$id));
       return redirect('listcoupon')->with('msg','Coupon Deleted Successfully');
    }
}
