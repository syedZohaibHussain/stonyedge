<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\frontend\Cart;
use App\Models\User;
use App\Models\Frontendsetting\Menusetting;
use App\Models\Product\ProductBanner;
use App\Models\Product\ProductImages;
use App\Models\Product\Product_specification;
use App\Models\Category\Categories;
use App\Models\Brands\Brands;
use App\Models\Specifications\Specification;
use App\Models\Brands\Selected_brands;
use DB;
use App\Models\Product\VariationDetails;
use Illuminate\Support\Facades\View;
class CartController extends Controller
{
   public function __construct() {
       $menus = Menusetting::where('is_active',1)->get();
    $categories = Categories::all();
         $selected = Selected_brands::all();
         $brands = Brands::all();

  View::share('menus',$menus);
  View::share('categories',$categories);
  View::share('selected',$selected);
  View::share('brands',$brands);
} 
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
        
       if($request->status == 'product'){
            $product = Product::findOrFail($request->product_id);
            $cart = session()->get('cart', []);
            $price = $product->new_price;
        if(isset($cart[$request->product_id])) {
            
            $cart[$request->product_id]['item_quantity'] = $request->qty;
            
        } else {
            
            $cart[$request->product_id] = [
                'product_id'=>$request->product_id,
                "name" => $product->product_name,
                "item_quantity" => $request->qty,
                "price" => $price,
                "image" => $product->thumbnail_url,
                "status" => $request->status,
            ];
        }
  
        session()->put('cart', $cart);

        session()->flash('success', 'Cart updated successfully');
          return redirect()->back()->with('error_code', 5);
        // return redirect('cart');
    }else{
        
      
        $product = VariationDetails::where('variation_id',$request->product_id)->first();
        
            $cart = session()->get('cart', []);
            $price = $product->v_new_price;
        if(isset($cart[$request->variation_id])) {
            
            $cart[$request->product_id]['item_quantity'] = $request->qty;
            
        } else {
            
            $cart[$request->product_id] = [
                'product_id'=>$request->product_id,
                "name" => $product->v_name,
                "item_quantity" => $request->qty,
                "price" => $price,
                "image" => $product->v_thumbnail_url,
                "status" => $request->status,
            ];
        }
        session()->put('cart', $cart);

        session()->flash('success', 'Cart updated successfully');
          return redirect()->back()->with('error_code', 5);
        // return redirect('cart');
        
    }
  }

//     public function checkOut(Request $request)
//     {
//         $userId=auth()->id();
// $user=User::find($userId);

//         // $carts=Cart::where('user_id',$userId);
//         $carts=DB::table('carts')->select('*')
//          // ->join('products','products.id','=','carts.product_id')
//           ->where('carts.user_id','=',$userId)
//          ->get();
//          dd($carts);
//           if($carts->count()>0){
// $cartTotal=$user->carts()->get();
// foreach ($cartTotal as $value) {
//    $total=$value->order_total;
// }
// }
//           $cartCount=Cart::where('user_id',$userId)->get()->count();
      
//         return view('frontend/checkOut',compact('carts','cartCount','total'));
//     }
public function checkOut(Request $request)
{
    if(session('cart')){
    return view('frontend/checkOut');
    }
    else{
    return view('frontend/emptyCart');
    }
  
}
    public function emptyCart(Request $request)
    {
       return view('frontend/emptyCart');
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
    // public function update(Request $request, $id)
    // {
    //     //
    // }
    public function update(Request $request)
    {
        // dd(session()->get('cart'));
        if($request->id && $request->item_quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["item_quantity"] = $request->item_quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//         $userId=auth()->id();
//         $cart=Cart::where('user_id',$userId);
    
// if ($cart->count() == 1){
//   Cart::where('cart_id',$id)->delete();

//   return view('frontend/emptyCart');
// }
//       Cart::where('cart_id',$id)->delete();
if($id) {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
      return redirect()->back();

    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
