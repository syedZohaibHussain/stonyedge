<?php

namespace App\Http\Controllers;

use App\Models\Order\Order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\frontend\Address;
use App\Models\Order\OrderItem;
use App\Models\Order\OrderStatus;
use App\Models\Delivery\PaymentMethod;
use App\Models\Delivery\ShippingMethod;
use App\Models\Category\Categories;
use App\Models\Product\Product;
use App\Models\Coupons\Coupon;
use App\Models\Coupons\CouponCategory;
use App\Models\Coupons\CouponProduct;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use DB;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;


class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=DB::table('order_payment')->select('*')
         ->join('addresses','addresses.id','=','order_payment.delivery_address_id')
         ->join('users','users.id','=','addresses.user_id')
         ->join('shipping_methods','shipping_methods.id','=','order_payment.shipping_id')
         ->join('payment_methods','payment_methods.id','=','order_payment.payment_id')
         ->get();

        $statuss=OrderStatus::all();
        
      return view('order/allOrder',compact('orders','statuss'));
    }
    public function orderStatus(Request $request)
{
   
    $orders=DB::table('order_payment')->select('*')
          ->where('order_payment.order_status',$request->order_status)
         ->join('addresses','addresses.id','=','order_payment.delivery_address_id')
         ->join('users','users.id','=','addresses.user_id')
         ->join('shipping_methods','shipping_methods.id','=','order_payment.shipping_id')
         ->join('payment_methods','payment_methods.id','=','order_payment.payment_id')
         ->get();

        $statuss=OrderStatus::all();
        
      return view('order/allOrder',compact('orders','statuss'));

}

public function addOrder()
{
        
    $payments=PaymentMethod::all();
    $shippings=ShippingMethod::all();
    $users=User::all();
$products=Product::all();
$statuss=OrderStatus::all();
// dd($statuss);
      return view('order/addOrder',compact('users','statuss','payments','shippings','products'));
    # code...
}
   
 public function updateStatus(Request $request)
    {
      $stat=OrderStatus::where('id',$request->status_id)->first();
      Order::where("order_payment_id",$request->status_id)->update(['order_status'=>$stat->status]);
          $data['status'] = Order::where("order_payment_id",$request->status_id)
                    ->get(['order_status']);
        return response()->json('success');
    }
  public function getUser(Request $request)
    {
          $data['addresses'] = Address::where("user_id",$request->user_id)
                    ->get(["address_details","id"]);
        return response()->json($data);
    }
 public function getDetail(Request $request)
    {
          $data['details'] = Address::where("id",$request->address_id)
                    ->get();
        return response()->json($data);
    }

    public function getDiscount(Request $request)
    {
          
          $coupon=Coupon::where("code",$request->code)
                    ->first();
        $data['discount']=Coupon::where("code",$request->code)->get();

    $catCoupon=CouponCategory::where('coupon_id',$coupon->id)->get();
    $prodCoupon=CouponProduct::where('coupon_id',$coupon->id)->get();
    // $data['prodCoupon']=$prodCoupon;
if($catCoupon){
    //check selected product belongs to this category coupon
    $product=Product::where('category_id',$catCoupon->category_id)->get();
    //discount on category
    $data['productCoupon'] = $product;
 
}
if($prodCoupon){
   $product=Product::where('id',$request->product_id)->get();
    //discount on category
    $data['productCoupon'] = $product;

}
$data['product_id']=$request->product_id;

        return response()->json($data);
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
        
      $addressId=$this->updateAddress($request);
      // dd($addressId);
      // $count=$request->product_name->count();
      $count=count($request->product_name);
 
//check for stock
        for($i = 0; $i < $count; $i++)
      {
        $product=Product::where('id','=',$request->prodId[$i])->first();
        if( $product->quantity >= $request->quantity[$i]){
            $pro_qty = $product->quantity - $request->quantity[$i];

        $remaining_qty =[

            'quantity' => $pro_qty,
        ];

        }
            else{
    return redirect()->back()->with('msg','The quantity you\'re ordering of '.$product->product_name.' isn\'t available in stock, only '.$product->quantity.' units are in Stock');
   }
 }
       $orderNumber=rand(); 
$data=[
      
      'order_no'=>$orderNumber,
      'sale_date'=>$request->date,
      'item_count'=>$count,
      'order_total'=>$request->subtotal + $request->shippingCost,
      // 'customer_name'=>$user->first_name,
      'shipping_id'=>$request->shipping,
      'payment_id'=>$request->payment,
      'order_status'=>$request->status,
      'delivery_address_id'=>$addressId,
      'delivery_charges'=>$request->shippingCost,
      'channel'=>'admin_dashboard',
    ];
    $orderId=Order::firstOrCreate($data)->id;


    for($i = 0; $i < $count; $i++){
  $items=[
'product_id'=>$request->prodId[$i],
'product_name'=>$request->product_name[$i],
'order_payment_id'=>$orderId,
'sale_price'=>$request->product_cost[$i],
'sale_quantity'=>$request->quantity[$i],
'discount_amount'=>0,
'sub_total'=>$request->total_cost[$i],
'sale_status'=>$request->status,
]; 
$orderItemId=OrderItem::firstOrCreate($items)->id;

  //update quantity in stock
 Product::where('id','=',$request->prodId[$i])->update($remaining_qty);



}

return redirect()->back()->with('msg','Order created successfully');
    }
    public function updateAddress($data)
{
    // dd($data->all());

 $newData=[
           'user_id'=>$data->customer,
           'first_name'=>$data->first_name,
           'last_name'=>$data->last_name,
           'phone'=>$data->phone,
           'longitude'=>$data->longitude,
           'latitude'=>$data->latitude,
           'address_details'=>$data->address_details,
           'city'=>null,
           'default'=>0,
           'label'=>null
        ];
 


      if($data->address == null){

           $addressId=Address::firstOrCreate($newData)->id;
      
             }
        else{
            Address::where('id',$data->address)->update($newData);
            $addressId=$data->address;
        }
        return $addressId;
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $orders=DB::table('order_payment')->select('*')
        ->where('order_payment.order_payment_id',$id)
         ->join('addresses','addresses.id','=','order_payment.delivery_address_id')
         ->join('users','users.id','=','addresses.user_id')
         ->join('shipping_methods','shipping_methods.id','=','order_payment.shipping_id')
         ->join('payment_methods','payment_methods.id','=','order_payment.payment_id')
         ->get();
         // dd($orders);
         $items=DB::table('products')->select('*')
         ->join('order_items','order_items.product_id','=','products.id')
        ->where('order_items.order_payment_id',$id)
        ->get();
  
$payments=PaymentMethod::all();
    $shippings=ShippingMethod::all();
    $users=User::all();
$products=Product::all();
        $statuss=OrderStatus::all();

      return view('Order/edit',compact('orders','users','statuss','payments','shippings','products','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


 $addressId=$this->updateAddress($request);
      // dd($addressId);
      // $count=$request->product_name->count();
      $count=count($request->product_name);
 // dd($request->all());

$data=[
      
      // 'order_no'=>$orderNumber,
      'sale_date'=>$request->date,
      'item_count'=>$count,
      'order_total'=>$request->subtotal + $request->shippingCost,
      // 'customer_name'=>$user->first_name,
      'shipping_id'=>$request->shipping,
      'payment_id'=>$request->payment,
      'order_status'=>$request->status,
      'delivery_address_id'=>$addressId,
      'delivery_charges'=>$request->shippingCost,
      'channel'=>'admin_dashboard',
    ];
    Order::where('order_payment_id',$id)->update($data);
OrderItem::where('order_payment_id',$id)->delete();
        // dd($request->prodId[0]);

    for($i = 0; $i < $count; $i++){
  $items=[
'product_id'=>$request->prodId[$i],
'product_name'=>$request->product_name[$i],
'order_payment_id'=>$id,
'sale_price'=>$request->product_cost[$i],
'sale_quantity'=>$request->quantity[$i],
'discount_amount'=>0,
'sub_total'=>$request->total_cost[$i],
'sale_status'=>$request->status,
]; 
$orderItemId=OrderItem::firstOrCreate($items)->id;
}

return redirect()->back()->with('msg','Order updated successfully');







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Order::where('order_payment_id',$id)->delete();
OrderItem::where('order_payment_id',$id)->delete();

return redirect()->back()->with('msg','Order deleted successfully');
    }
    

 public function registerCustomer(Request $request)
    {
         User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
               'role'=>'user',
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('addOrder')->with('msg','Customer added');
    }

    // ......................................invoice
  
public function invoice()
{
        $client = new Party([
            'name'          => 'Roosevelt Lloyd',
            'phone'         => '(520) 318-9486',
            'custom_fields' => [
                'note'        => 'IDDQD',
                'business id' => '365#GG',
            ],
        ]);

        $customer = new Party([
            'name'          => 'Ashley Medina',
            'address'       => 'The Green Street 12',
            'code'          => '#22663214',
            'custom_fields' => [
                'order number' => '> 654321 <',
            ],
        ]);

        $items = [
            (new InvoiceItem())->title('Service 1')->pricePerUnit(47.79)->quantity(2)->discount(10),
            (new InvoiceItem())->title('Service 2')->pricePerUnit(71.96)->quantity(2),
            (new InvoiceItem())->title('Service 3')->pricePerUnit(4.56),
            (new InvoiceItem())->title('Service 4')->pricePerUnit(87.51)->quantity(7)->discount(4)->units('kg'),
            (new InvoiceItem())->title('Service 5')->pricePerUnit(71.09)->quantity(7)->discountByPercent(9),
            (new InvoiceItem())->title('Service 6')->pricePerUnit(76.32)->quantity(9),
            (new InvoiceItem())->title('Service 7')->pricePerUnit(58.18)->quantity(3)->discount(3),
            (new InvoiceItem())->title('Service 8')->pricePerUnit(42.99)->quantity(4)->discountByPercent(3),
            (new InvoiceItem())->title('Service 9')->pricePerUnit(33.24)->quantity(6)->units('m2'),
            (new InvoiceItem())->title('Service 11')->pricePerUnit(97.45)->quantity(2),
            (new InvoiceItem())->title('Service 12')->pricePerUnit(92.82),
            (new InvoiceItem())->title('Service 13')->pricePerUnit(12.98),
            (new InvoiceItem())->title('Service 14')->pricePerUnit(160)->units('hours'),
            (new InvoiceItem())->title('Service 15')->pricePerUnit(62.21)->discountByPercent(5),
            (new InvoiceItem())->title('Service 16')->pricePerUnit(2.80),
            (new InvoiceItem())->title('Service 17')->pricePerUnit(56.21),
            (new InvoiceItem())->title('Service 18')->pricePerUnit(66.81)->discountByPercent(8),
            (new InvoiceItem())->title('Service 19')->pricePerUnit(76.37),
            (new InvoiceItem())->title('Service 20')->pricePerUnit(55.80),
        ];

        $notes = [
            'your multiline',
            'additional notes',
            'in regards of delivery or something else',
        ];
        $notes = implode("<br>", $notes);

        $invoice = Invoice::make('receipt')
            ->series('BIG')
            ->sequence(667)
            ->serialNumberFormat('{SEQUENCE}/{SERIES}')
            ->seller($client)
            ->buyer($customer)
            ->date(now()->subWeeks(3))
            ->dateFormat('m/d/Y')
            ->payUntilDays(14)
            ->currencySymbol('$')
            ->currencyCode('USD')
            ->currencyFormat('{SYMBOL}{VALUE}')
            ->currencyThousandsSeparator('.')
            ->currencyDecimalPoint(',')
            ->filename($client->name . ' ' . $customer->name)
            ->addItems($items)
            ->notes($notes)
            ->logo(public_path('vendor/invoices/sample-logo.png'))
            // You can additionally save generated invoice to configured disk
            ->save('public');
 dd($invoice);

        $link = $invoice->url();
        // Then send email to party with link

        // And return invoice itself to browser or have a different view
        return $invoice->stream();
}



}
