<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\ProductBanner;
use App\Models\Product\ProductImages;
use App\Models\Product\Product_specification;
use App\Models\Category\Categories;
use App\Models\Brands\Brands;
use App\Models\Specifications\Specification;


class ProductController extends Controller
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
        $categories = Categories::all();
        $brands = Brands::all();
        return view('addProduct',compact('categories','brands'));
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
        
        $imageName=$request->thumbnail_url->getClientOriginalExtension();
        $image=$request->alt_name.'.'.$imageName;
        $thumbnail_image = $request->thumbnail_url->move('productthumbnailImages/'. date("m-d-Y"),$image);

        $data=[
                'product_name'=>$request->product_name,
                'description'=>$request->description,
                'brand_id'=>$request->brand_id,
                'category_id'=>$request->cat_id,
                'thumbnail_url'=>$thumbnail_image,
                'alt_name'=>$image,
                'sku'=>$request->sku,
                'quantity'=>$request->quantity,
                'old_price'=>$request->old_price,
                'new_price'=>$request->new_price,
                'youtube_video_url'=>$request->youtube_url,
                'new_arrival'=>$request->new_arrival,
                'is_active'=>$request->is_active,
                'is_returnable'=>$request->is_returnable,
        ];
        $last_id = Product::firstOrCreate($data)->id;
        
       
        if($request->image_url != null){

            $image_url = $request->image_url;
            $i = 0;

        for($count = 0; $count < count($image_url); $count++){

        ++$i;
        $imageName=$image_url[$count]->getClientOriginalExtension();
        $image=$request->alt_name.'_'.$i.'.'.$imageName;
        $images = $image_url[$count]->move('productImages/'. date("m-d-Y"),$image);

        $data = array(
        'product_id' => $last_id,
        'image_url'  => $images,
        'alt_name'=>$image,
       );
         ProductImages::insert($data);
        
    }
   
    }
    //     $specificationType = $request->type;
    //     $specificationValue = $request->value;
    //     if($specificationType != null){
    //         for($count = 0; $count < count($specificationType); $count++){

    //     $data = array(
    //     'product_id' => $last_id,
    //     'specification_name'  => $specificationType[$count],
    //     'specification_value' => $specificationValue[$count],
    //    );

    //     Product_specification::insert($data);

    //     }

    // }

    //     $specType = $request->spec_type;
    //     $specValue = $request->spec_value;
        
        
    //         for($count = 0; $count < count($specType); $count++){
    //         if($specType[$count] != null){
    //             if($specValue[$count] != null){



    //     $data = array(
    //     'product_id' => $last_id,
    //     'specification_name'  => $specType[$count],
    //     'specification_value' => $specValue[$count],
    //    );

    //     Product_specification::insert($data);
        
        
    //     $catdata = array(
    //     'cat_id' => $request->cat_id,
    //     'field'  => $specType[$count],

    //    );

    //     Specification::insert($catdata);
        
    //             }
    //     }

    // }
    return redirect()->route('productList')->with('msg','Product Created Successfully..');

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $categories = Categories::all();
        $brands = Brands::all();
        $banners=ProductBanner::where('product_id',$id)->get();
        $productImages=ProductImages::where('product_id',$id)->get();
        $products = Product::where('id',$id)->first();
        $specifications = Product_specification::where('product_id',$id)->get();
        return view('editProduct',compact('categories','brands','products','specifications','banners','productImages'));
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
    public function update(Request $request, $last_id)
    {
        if($request->imgID != null){
            $imgid = $request->imgID;
            for($count = 0; $count < count($imgid); $count++){
                
               ProductImages::where('id',$imgid[$count])->delete(); 
            }
        }
    
        if($request->image_url != null){

            $image_url = $request->image_url;
            $i = 0;

        for($count = 0; $count < count($image_url); $count++){

        ++$i;
        $imageName=$image_url[$count]->getClientOriginalExtension();
        $image=$request->alt_name.'_'.$i.'.'.$imageName;
        $images = $image_url[$count]->move('productImages/'. date("m-d-Y"),$image);

        $data = array(
        'product_id' => $last_id,
        'image_url'  => $images,
        'alt_name'=>$image,
       );
         ProductImages::insert($data);
        
    }
   
    }

$n_image = $request->file('thumbnail_url');
if($n_image != ""){
if(file_exists($request->old_thumbnail_url)){
     \File::delete($request->old_thumbnail_url);
          // unlink($request->old_category_image);
   
 }
 
           

        $imageName=$request->thumbnail_url->getClientOriginalExtension();
        $image=$request->alt_name.'.'.$imageName;
        $thumbnail_image = $request->thumbnail_url->move('productthumbnailImages/'. date("m-d-Y"),$image);

            $new_img=[

            'thumbnail_url'=>$thumbnail_image,
            
        ];
       Product::where('id',$last_id)->update($new_img);
            }

        

        $data=[
                'product_name'=>$request->product_name,
                'description'=>$request->description,
                'brand_id'=>$request->brand_id,
                'category_id'=>$request->cat_id,
                // 'thumbnail_url'=>$thumbnail_image,
                'sku'=>$request->sku,
                'quantity'=>$request->quantity,
                'old_price'=>$request->old_price,
                'new_price'=>$request->new_price,
                'youtube_video_url'=>$request->youtube_url,
                'new_arrival'=>$request->new_arrival,
                'is_active'=>$request->is_active,
                'is_returnable'=>$request->is_returnable,
        ];
          Product::where('id',$last_id)->update($data);
        

       

       
    //     if($request->image_url != null){

    //         $image_url = $request->image_url;
    //         $i = 0;

    //     for($count = 0; $count < count($image_url); $count++){

    //     ++$i;
    //     $imageName=$image_url[$count]->getClientOriginalExtension();
    //     $image=$i.'_'.$request->product_name.'.'.$imageName;
    //     $images = $image_url[$count]->move('productImages/'. date("m-d-Y"),$image);

    //     $data = array(
    //     'product_id' => $last_id,
    //     'image_url'  => $images,
    //     'alt_name'=>$image,
    //    );
    //      ProductImages::insert($data);
        
    // }
   
    // }
    
    $products = Product::all();
        return redirect()->route('productList')->with('msg','Product Updated Successfully..');
            // return redirect()->back()->with('msg','Product Updated Successfully..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function destroy($id)
    {
        $product=Product::where('id',$id)->first();
        // dd($product->id);
        if($product->variation  == 0){
          $product->delete(); 
            return redirect()->back()->with('msg','Product deleted successfully'); 
}
        else{
           return redirect()->back()->with('msg','Sorry we cannot delete '.$product->product_name.' Product, because variation exist.');  
            

        }
    }

    public function indexProduct()
    {
        $products = Product::all();
        return view('productList',compact('products'));
    }
    
}
