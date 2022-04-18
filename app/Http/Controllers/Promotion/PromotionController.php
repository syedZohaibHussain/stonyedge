<?php

namespace App\Http\Controllers\Promotion;

use App\Http\Controllers\Controller;
use App\Models\Promotion\Promotion;
use App\Models\Promotion\PromotionProduct;
use App\Models\Category\Categories;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class PromotionController extends Controller
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
        $promotions = Promotion::all();
        return view('promotions/index',compact('promotions','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
     
            return view('promotions/create',compact('products'));
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
         'promo_amount' => $request->promo_amount,
         'label' => $request->label,
        'expiry_date' => $request->expiry_date,
       );
    //   dd();
         $last_promo_id = Promotion::Create($data)->id;
         
    
    $product = $request->product;
    if($product != null){
    for($count = 0; $count < count($product); $count++){
    if($product[$count] != null) {
      
        $data = array(
        'promotion_id' => $last_promo_id,
        'product_id'  => $product[$count],
       );
    //   dd($data);
    PromotionProduct::insert($data);
    }
    }
    }
         return redirect('promotion')->with('msg','Promotion Added Successfully');
    }

  
    public function show(Promotion $promotion)
    {
        //
    }

   
    public function edit(Promotion $promotion)
    {
        //
    }

  
    public function update(Request $request,$id)
    {
     

      $data = array(
        'code' => $request->code, 
        'promo_amount' => $request->promo_amount,
        'label' => $request->label,
        'expiry_date' => $request->expiry_date,
       );
        Promotion::where('id',$id)->update($data);
   
   if(PromotionProduct::where('promotion_id',$id)->get()->isNotEmpty())
   {
       PromotionProduct::where('promotion_id',$id)->delete();
   }
   

   
    $product = $request->product;
    if($product != null){
    for($count = 0; $count < count($product); $count++){
    if($product[$count] != null) {
      
         $data = array(
        'promotion_id' => $id,
        'product_id'  => $product[$count],
       );
         PromotionProduct::insert($data);
    }
    }
    }
        return redirect('promotion')->with('msg','Promotion Updated Successfully');


    }

   
    public function destroy($id)
    {
       Promotion::destroy(array('id',$id));
    
       PromotionProduct::destroy(array('promotion_id',$id));
       return redirect('promotion')->with('msg','Promotion Deleted Successfully');
    }
}
