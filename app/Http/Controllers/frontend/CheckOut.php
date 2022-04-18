<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order\Order;
use App\Models\Product\Product;
use App\Models\User\OnlineUserInfo;
use App\Models\NewOrder;
use App\Models\NewOrderDetail;
use Stripe;
class CheckOut extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$orders = Order::all();
		$count = Order::all()->count();
		$products = Product::all();
		if(session('cart')){
	return view('frontend.check_out',compact('orders','products','count'));
	}else{
		return redirect()->back();
	}

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
		// dd($request->all());


		$subtotal=0;
		$order_number = strtotime(date("Y/m/d h:i:sa"));
		$data=[
			'email'=>$request->email,
			'alert'=>$request->alert,
			'delivery_method'=>'ship',
			'f_name'=>$request->f_name,
			'l_name'=>$request->l_name,
			'address'=>$request->address,
			'aparment'=>$request->aparment,
			'city'=>$request->city,
			'u_states'=>$request->u_states,
			'states'=>$request->states,
			'zip_code'=>$request->zip_code,
			'phone'=>$request->phone,
			'order_number'=>$order_number,
			'payment_method' => $request->payment_method,
		];
	   OnlineUserInfo::create($data);
	   $order_id = NewOrder::create($data)->id;

        if($carts = session('cart')){
            foreach($carts as $id => $cart){
                $cartData=[
                    'order_number'=>$order_number,
                    'product_id'=>$cart['product_id'],
                    'product_name'=>$cart['name'],
                    'product_price'=>$cart['price'],
                    'product_quantity'=>$cart['item_quantity'],
                    'ptoduct_image'=>$cart['image'],
                    'product_status'=>$cart['status'],
                ];
                $subtotal += $cart['price'] * $cart['item_quantity'];
                Order::create($cartData);
                $cartData["order_id"] = $order_id;
                unset($cartData['product_name']);
                NewOrderDetail::create($cartData);
            }
        }
        session()->forget('cart');
        session()->flush();
        if($request->delivery_method == 'stripe'){
            return view('stripe',compact('subtotal','order_number'));
        }
        return redirect('thank-you');
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
