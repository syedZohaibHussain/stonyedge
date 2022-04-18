<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', [App\Http\Controllers\frontend\LandingPageController::class,'index'])->name('login');
Route::post('get-subchildcategories-by-category',[App\Http\Controllers\Category::class, 'getsubchildCategories']);
Route::post('get-subcategories-by-category',[App\Http\Controllers\Category::class, 'getsubCategories']);
Route::post('child-sub-category-store', [App\Http\Controllers\Category::class, 'ChildSubcatStore'])->name('child-sub-category-store');
Route::post('sub-category-store', [App\Http\Controllers\Category::class, 'SubcatStore'])->name('sub-category-store');
Route::get('addSubChildCategory', [App\Http\Controllers\Category::class, 'ChildSubCategory'])->name('addSubChildCategory');
Route::get('addCategory', [App\Http\Controllers\Category::class, 'addCategory'])->name('addCategory');
Route::get('addSubCategory', [App\Http\Controllers\Category::class, 'SubCategory'])->name('addSubCategory');
Route::get('subChildCategory', [App\Http\Controllers\Category::class, 'indexchildcategory'])->name('subChildCategory');
Route::get('subCategory', [App\Http\Controllers\Category::class, 'indexsubcategory'])->name('subCategory');
Route::resource('category','App\Http\Controllers\Category');

Route::get('productList', [App\Http\Controllers\ProductController::class, 'indexProduct'])->name('productList');
Route::resource('addProduct','App\Http\Controllers\ProductController');

Route::resource('promotion','App\Http\Controllers\Promotion\PromotionController');
Route::get('brandList', [App\Http\Controllers\BrandsController::class, 'indexBrands'])->name('brandList');
Route::resource('addBrand','App\Http\Controllers\BrandsController');

Route::get('specification-list', [App\Http\Controllers\Specifications::class, 'indexs'])->name('specification-list');
Route::resource('addspecifications','App\Http\Controllers\Specifications');
Route::resource('variation','App\Http\Controllers\Variation');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('add-tag/{id}', [App\Http\Controllers\Category::class, 'addTag'])->name('add-tag');

Route::resource('listmenu','App\Http\Controllers\Frontendsetting\MenusettingController');
// coupons route
Route::resource('listcoupon','App\Http\Controllers\Coupons\CouponController');
Route::get('addcoupon', [App\Http\Controllers\Coupons\CouponController::class, 'create']);
Route::post('addcoupons',[App\Http\Controllers\Coupons\CouponController::class,'store']);
// coupon ends
Route::put('banner-block/{id}',[App\Http\Controllers\Frontendsetting\HomesliderController::class, 'block'])->name('banner-block');
Route::put('category-block/{id}',[App\Http\Controllers\Frontendsetting\CategorysliderController::class, 'block'])->name('category-block');
// frontsetting route
Route::get('addmenu',[App\Http\Controllers\Frontendsetting\MenusettingController::class,'create']);
Route::post('addmenus',[App\Http\Controllers\Frontendsetting\MenusettingController::class,'store']);
Route::put('menu-block/{id}',[App\Http\Controllers\Frontendsetting\MenusettingController::class, 'block'])->name('menu-block');


Route::get('addbanner',[App\Http\Controllers\Frontendsetting\HomesliderController::class,'create']);
Route::post('addbanners',[App\Http\Controllers\Frontendsetting\HomesliderController::class,'store']);

Route::resource('listbanner','App\Http\Controllers\Frontendsetting\HomesliderController');

// category slider route
Route::get('addcategoryslider',[App\Http\Controllers\Frontendsetting\CategorysliderController::class,'create']);
Route::post('addcategorysliders',[App\Http\Controllers\Frontendsetting\CategorysliderController::class,'store']);
Route::resource('listcategoryslider','App\Http\Controllers\Frontendsetting\CategorysliderController');

//6/14/2021 task
Route::get('addproductslider',[App\Http\Controllers\Frontendsetting\ProductSliderController::class,'create']);
Route::get('texting',[App\Http\Controllers\Frontendsetting\ProductSliderController::class,'Text']);
Route::resource('productslider','App\Http\Controllers\Frontendsetting\ProductSliderController');
Route::get('addhomeslider',[App\Http\Controllers\Frontendsetting\HomeSlider::class,'create']);
Route::resource('homeslider','App\Http\Controllers\Frontendsetting\HomeSlider');
//6/14/2021 task

// currency route
Route::get('addcurrency',[App\Http\Controllers\Setting\CurrencyController::class,'create']);
Route::post('addcurrencies',[App\Http\Controllers\Setting\CurrencyController::class,'store']);


Route::resource('listcurrency','App\Http\Controllers\Setting\CurrencyController');



// RedeemVoucher route
Route::get('addredeemvoucher',[App\Http\Controllers\RedeemVoucher\RedeemControlller::class,'create']);
Route::post('addvoucher',[App\Http\Controllers\RedeemVoucher\RedeemControlller::class,'store']);
// redem voucher ends

Route::resource('listvoucher','App\Http\Controllers\RedeemVoucher\RedeemControlller');
// frontend setting route ends

// order start
Route::resource('order','App\Http\Controllers\OrderController');
Route::get('addOrder', [App\Http\Controllers\OrderController::class, 'addOrder'])->name('addOrder');

Route::get('order-status', [App\Http\Controllers\OrderController::class, 'orderStatus'])->name('order-status');
Route::resource('return','App\Http\Controllers\ReturnController');

Route::post('get-address-by-user',[App\Http\Controllers\OrderController::class, 'getUser']);
Route::post('get-details-by-address',[App\Http\Controllers\OrderController::class, 'getDetail']);
Route::post('get-discount-by-code',[App\Http\Controllers\OrderController::class, 'getDiscount']);
Route::post('update-order-status',[App\Http\Controllers\OrderController::class, 'updateStatus']);

Route::get('/invoicee', [App\Http\Controllers\OrderController::class, 'invoice']);
// order end

//return and exchange start
Route::get('addReturn', [App\Http\Controllers\ReturnController::class, 'addReturn'])->name('addReturn');
Route::get('returnOrder', [App\Http\Controllers\ReturnController::class, 'returnOrder'])->name('returnOrder');
Route::get('allExchange', [App\Http\Controllers\ReturnController::class, 'allExchange'])->name('allExchange');

//............................ frontend routes................................//

//landing page route
Route::resource('landingPage','App\Http\Controllers\frontend\LandingPageController');

Route::get('productDetail/{id}', [App\Http\Controllers\frontend\LandingPageController::class, 'productDetail'])->name('productDetail');

Route::resource('carts','App\Http\Controllers\frontend\CartController');
Route::get('checkOut',[App\Http\Controllers\frontend\CartController::class,'checkOut'])->name('checkOut');

Route::get('emptyCart',[App\Http\Controllers\frontend\CartController::class,'emptyCart'])->name('emptyCart');

// Route::get('loginCustomer',[App\Http\Controllers\frontend\CustomerController::class,'loginCustomer'])->name('loginCustomer');
// Route::get('signUpCustomer',[App\Http\Controllers\frontend\CustomerController::class,'signUpCustomer'])->name('signUpCustomer')->middleware('role');

Route::get('map',[App\Http\Controllers\frontend\OrderController::class,'map'])->name('map')->middleware('role');

Route::post('payment',[App\Http\Controllers\frontend\OrderController::class,'payment'])->name('payment');
Route::post('orderPlaced/{id}',[App\Http\Controllers\frontend\OrderController::class,'orderPlaced'])->name('orderPlaced');

Route::resource('address','App\Http\Controllers\frontend\AddressController');

// Route::post('selectAddress',[App\Http\Controllers\frontend\OrderController::class,'selectAddress'])->name('selectAddress');

// ////////////////////////////middleware
// ////////////////////////////middleware
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('role:admin');
Route::get('/userHome', [App\Http\Controllers\frontend\userProfile\ProfileController::class, 'index'])->middleware('role:user');


Route::get('logout', [App\Http\Controllers\Auth\LoginControlle::class, 'logout']);
Route::post('registerCustomer', [App\Http\Controllers\OrderController::class, 'registerCustomer'])->name('registerCustomer');
//...........................user management start...........................................
Route::resource('user','App\Http\Controllers\UserController');
Route::resource('role','App\Http\Controllers\RoleController');
//.............................user management end...........................................

//.............................dashboard user address  start...........................................
Route::resource('dashboard-address','App\Http\Controllers\dashboard\AddressController');
Route::get('addressCreate/{id}', [App\Http\Controllers\dashboard\AddressController::class, 'addressCreate'])->name('addressCreate');


//.............................dashboard user address   end...........................................
//.....................dashboard login pages
Route::get('delivery',[App\Http\Controllers\dashboard\AccessController::class,'loginDelivery'])->name('delivery');
Route::get('/deliveryHome', [App\Http\Controllers\dashboard\AccessController::class, 'deliveryHome'])->middleware('role:delivery');

Route::get('warehouse',[App\Http\Controllers\dashboard\AccessController::class,'loginWarehouse'])->name('warehouse');
Route::get('/warehouseHome', [App\Http\Controllers\dashboard\AccessController::class, 'warehouseHome'])->middleware('role:warehouse');


Route::resource('about-us','App\Http\Controllers\frontend\AboutUs');
Route::resource('cart','App\Http\Controllers\frontend\Cart');
Route::resource('checkout','App\Http\Controllers\frontend\CheckOut');
Route::resource('thank-you','App\Http\Controllers\frontend\ThankYou');
Route::resource('product-details','App\Http\Controllers\frontend\ProductDetails');
Route::resource('shop','App\Http\Controllers\frontend\Shop');
Route::resource('blogs','App\Http\Controllers\frontend\Blogs');
Route::resource('single-blog','App\Http\Controllers\frontend\BlogDetails');
Route::resource('faq','App\Http\Controllers\frontend\FAQ');
Route::resource('contact-us','App\Http\Controllers\frontend\ContactUs');
Route::get('sign-in-user',[App\Http\Controllers\frontend\CustomerController::class,'loginCustomer'])->name('sign-in-user');
Route::get('sign-up-user',[App\Http\Controllers\frontend\CustomerController::class,'signUpCustomer'])->name('sign-up-user');
Route::get('/', [App\Http\Controllers\frontend\LandingPageController::class,'index'])->name('login');
Route::get('variation-details/{id}', [App\Http\Controllers\frontend\ProductDetails::class, 'variation'])->name('variation-details');


Route::get('stripe', [App\Http\Controllers\frontend\StripeController::class, 'stripe']);
Route::post('stripe', [App\Http\Controllers\frontend\StripeController::class, 'stripePost'])->name('stripe.post');