<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\frontend\Cart;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo() {
  $role = Auth::user()->role; 
        $cartCount=Cart::where('user_id',auth()->id())->count();
if($cartCount == 0){
  $i='userHome';
}
else{
  $i='shipping';
}
  switch ($role) {

    case 'admin':
      return '/home';
      break;

    case 'user':
           switch ($i) {

             case 'userHome':
                return '/userHome';
               break;

              case 'shipping':
                return '/address';
               break;
               
             default:
                return '/userHome';
               break;
           }
     
      break; 

case 'delivery':
// dd($role);

      return '/deliveryHome';
      break;
case 'warehouse':
// dd($role);

      return '/warehouseHome';
      break;
    default:
      return '/'; 
    break;
  }
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


 public function logout(Request $request)
    {
           $role = Auth::user()->role;
        $this->guard()->logout();
   
  switch ($role) {
    case 'admin':
      return redirect('/login');
      break;
    case 'user':
      return redirect('/loginCustomer');
      break; 
case 'delivery':
      return redirect('/delivery');
      break; 
      case 'warehouse':
      return redirect('/warehouse');
      break; 
    default:
      return redirect('/login'); 
    break;
  }

    }



}
