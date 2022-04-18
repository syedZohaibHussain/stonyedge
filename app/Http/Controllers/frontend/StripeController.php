<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\BillingDetail;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Session;
use Stripe;
use DB;
class StripeController extends Controller
{
  




      /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return redirect('cart');
    }
   
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $subtotal = $request->subtotal;
        
        
        
        $data=[

            'order_no'=>$request->order_no,
            'card_name'=>$request->card_name,
            'card_no'=>$request->card_no,
            'sub_total'=>$subtotal,
        ];

        BillingDetail::create($data);

         $stripe=Stripe\Stripe::setApiKey('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');
    
        Stripe\Stripe::setApiKey('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');
      Stripe\Charge::create ([
                "amount" =>$subtotal * 100,
                // "amount" => 1 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This payment is .$order_number."
        ]);

      return redirect('thank-you');

//      $user=auth()->user();
//    $user_name=$user->name;
//    $order=Order::where('user_id',$request->user_id)->first();
//     $carts=DB::table('carts')->select('*')
//         ->join('products','products.id','=','carts.product_id')
//         ->where('carts.user_id',$request->user_id)
//         ->get();

//        $total= $user->carts()->sum('sub_total');

//     return view('invoice',compact('user_name','order','carts','total'));

//    $this->BillingDetail($request);
   
  
//   $orderId=$this->PlaceOrder($request);

// $this->OrderItem($orderId,$request);

//       $stripe=Stripe\Stripe::setApiKey('sk_test_51JMpFSLWjXzrSmHT4ie6HOoWH5oTTEZiWTT7bQCGYGiTUPdT9Ez1Zms1WmkCPIcuXKoXnrWIfOo8QH85KT4uU9x300a5z8RHl5');
    
//         Stripe\Stripe::setApiKey('sk_test_51JMpFSLWjXzrSmHT4ie6HOoWH5oTTEZiWTT7bQCGYGiTUPdT9Ez1Zms1WmkCPIcuXKoXnrWIfOo8QH85KT4uU9x300a5z8RHl5');
//       Stripe\Charge::create ([
//                 "amount" => $request->total,
//                 "currency" => "usd",
//                 "source" => $request->stripeToken,
//                 "description" => "This payment is tested purpose"
//         ]);

//         Session::flash('success', 'Payment successful!');
           
//         return back();
    }
    public function BillingDetail($request)
    {
        $bill=[
      'name'=>$request->customer_name,
      'email'=>$request->email,
      'phone'=>$request->phone,
      'address'=>$request->address,
      'user_id'=>$request->user_id,
];
       BillingDetail::firstOrCreate($bill);
    }
     public function PlaceOrder($request)
    {
      $order=[
      'order_no'=>rand(),
      'user_id'=>$request->user_id,
      'total'=>$request->total,
      
];
       return $id=Order::firstOrCreate($order)->id;
    }
      public function OrderItem($orderId,$request)
    {
          $carts=DB::table('carts')->select('*')
        ->join('products','products.id','=','carts.product_id')
        ->where('carts.user_id',$request->user_id)
        ->get();
        // dd($carts);
       foreach ($carts as $key => $cart) {
         $orderItem=[
              'product_id'=>$cart->product_id,
              'order_payment_id'=>$orderId,
               'price'=>$cart->price,
               'quantity'=>$cart->cart_quantity,
               'sub_total'=>$cart->sub_total,
         ];
          $productQuantity=$cart->quantity-$cart->cart_quantity;

        $remaining =[

            'quantity' => $productQuantity,
        ];

    Product::where('id','=',$cart->product_id)->update($remaining);
        OrderItem::firstOrCreate($orderItem);

        } 

    }
}
