<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\Cart;
use App\Models\User;
use DB;
use App\Models\frontend\Address;
use App\Models\Order\Order;
use App\Models\Order\OrderItem;
use Illuminate\Support\Carbon;

class OrderController extends Controller
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

public function map()
{
 return view('frontend/map');
}


public function payment(Request $request)
{
          $userId=auth()->id();
$user=User::find($userId);
$carts=DB::table('carts')->select('*')
         ->join('products','products.id','=','carts.product_id')
          ->where('carts.user_id','=',$userId)
         ->get();
$cartTotal=$user->carts()->get();
foreach ($cartTotal as $value) {
   $total=$value->order_total;
}
$addId=Address::where('id',$request->address_id)->first();
          $cartCount=Cart::where('user_id',$userId)->get()->count();
    if($request->newAddress == 'new'){
        

          if($request->default){
            $default=1;
        }
        else{
            $default=0;
        }

        if(!$request->home){
            $label='Work';
        }
        if(!$request->work){
            $label='Home';
        }

        $data=[
           'user_id'=>$userId,
           'first_name'=>$request->f_name,
           'last_name'=>$request->l_name,
           'phone'=>$request->phone,
           'address_details'=>$request->address_details,
           'city'=>$request->city,
           'default'=>$default,
           'label'=>$label
        ];

        $addressId=Address::firstOrCreate($data)->id;
        $addId=Address::where('id',$addressId)->first();
        
    }
    
        
         
 return view('frontend/payment',compact('total','addId'));
    
   
  

       
}
public function orderPlaced(Request $request,$id)
{
      $userId=auth()->id();
      $user=User::find($userId);
  
    $cartCount=Cart::where('user_id',$userId)->get()->count();
   $address=Address::where('id',$id)->first();

   $cartTotal=$user->carts()->get();
foreach ($cartTotal as $value) {
   $total=$value->order_total;
}
 $carts=DB::table('carts')->select('*')
         ->join('products','products.id','=','carts.product_id')
          ->where('carts.user_id','=',$userId)
         ->get();

//create order
         $order_date = Carbon::now()->toDateString();
         $orderNumber=rand(); 
$data=[
      
      'order_no'=>$orderNumber,
      'sale_date'=>$order_date,
      'item_count'=>$cartCount,
      'order_total'=>$total,
      // 'customer_name'=>$user->first_name,
      'payment_status'=>'Not Paid',
      'delivery_address_id'=>$id,
      'delivery_charges'=>0,
      // 'order_status'=>'pending',
    ];
    $orderId=Order::firstOrCreate($data)->id;
foreach ($carts as $cart) {
  $items=[
'product_id'=>$cart->product_id,
'product_name'=>$cart->product_name,
'order_payment_id'=>$orderId,
'sale_price'=>$cart->new_price,
'sale_quantity'=>$cart->cart_quantity,
'discount_amount'=>0,
'sub_total'=>$cart->sub_total,
'sale_status'=>0
]; 
$orderItemId=OrderItem::firstOrCreate($items)->id;
}
$carts=DB::table('order_payment')->select('*')
         ->join('order_items','order_items.order_payment_id','=','order_payment.order_payment_id')
         ->where('order_no',$orderNumber)
         ->get();
// dd($carts);
 return view('frontend/orderPlaced',compact('address','cartCount','total','carts'));
}

// public function selectAddress(Request $request)
// {
//    dd($request->all());
// }

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
        //
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
