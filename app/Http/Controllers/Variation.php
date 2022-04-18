<?php

namespace App\Http\Controllers;

use App\Models\Product\VariationBanner;
use App\Models\Product\VariationDetails;
use App\Models\Product\VariationImage;
use App\Models\Product\Product;
use Illuminate\Http\Request;


class Variation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->id;
        if($id != null){
            $variations = VariationDetails::where('product_id',$id)->get();
        }else{
            $variations = VariationDetails::all();
        }
        
        return view('variationList',compact('variations'));
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
        $last_id = $request->id;
        $imageName=$request->thumbnail_url->getClientOriginalExtension();
        $image=$request->alt_name.'.'.$imageName;
        $thumbnail_image = $request->thumbnail_url->move('variationthumbnailImages/'. date("m-d-Y"),$image);

        $data=[
                'v_name'=>$request->product_name,
                'v_description'=>$request->description,
                'v_thumbnail_url'=>$thumbnail_image,
                'valt_name'=>$request->alt_name,
                'v_sku'=>$request->sku,
                'v_color_name'=>$request->color_name,
                'v_color_code'=>$request->color_code,
                'product_id'=>$request->id,
                'v_quantity'=>$request->quantity,
                'v_old_price'=>$request->old_price,
                'v_new_price'=>$request->new_price,
                'v_youtube_video_url'=>$request->youtube_url,
                'v_new_arrival'=>$request->new_arrival,
                'v_is_returnable'=>$request->is_returnable,
                'v_is_active'=>$request->is_active,
        ];
         $last_id = VariationDetails::firstOrCreate($data)->id;
        
        $variation=['variation'=> 1 ];
         Product::where('id',$request->id)->update($variation);

        if($request->image_url != null){

            $image_url = $request->image_url;
            $i = 0;

        for($count = 0; $count < count($image_url); $count++){

        ++$i;
        $imageName=$image_url[$count]->getClientOriginalExtension();
        $image=$request->alt_name.'_'.$i.'.'.$imageName;
        $images = $image_url[$count]->move('productVariationImages/'. date("m-d-Y"),$image);

        $data = array(
        'variation_id' => $last_id,
        'v_image_url'  => $images,
        'valt_name'=>$image,
       );
         VariationImage::insert($data);
        
    }
   
    }

            return redirect()->route('variation.index')->with('msg','Variation Created Successfully..');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('id',$id)->first();

        return view ('addvariation',compact('products'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $variation = VariationDetails::where('variation_id',$id)->first();
        $variationImages = VariationImage::where('variation_id',$id)->get();
        
        return view ('Dashboard.Variation.edit',compact('variation','variationImages'));
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
        if($request->imgID != null){
            $imgid = $request->imgID;
            for($count = 0; $count < count($imgid); $count++){
                
               VariationImage::where('vimage_id',$imgid[$count])->delete(); 
            }
        }
    
        if($request->image_url != null){

            $image_url = $request->image_url;
            $i = 0;

        for($count = 0; $count < count($image_url); $count++){

        ++$i;
        $imageName=$image_url[$count]->getClientOriginalExtension();
        $image=$request->alt_name.'_'.$i.'.'.$imageName;
        $images = $image_url[$count]->move('productVariationImages/'. date("m-d-Y"),$image);

        $data = array(
        'v_image_url'  => $images,
        'variation_id' =>$id,
        'valt_name'=>$image,
       );
         VariationImage::insert($data);
        
    }
   
    }
        if($request->thumbnail_url != null){
            if(file_exists($request->old_thumbnail_url)){
     \File::delete($request->old_thumbnail_url);
          // unlink($request->old_category_image);
   
 }
        // unlink($request->old_thumbnail_url);
        $imageName=$request->thumbnail_url->getClientOriginalExtension();
        $image=$request->alt_name.'.'.$imageName;
        $thumbnail_image = $request->thumbnail_url->move('variationthumbnailImages/'. date("m-d-Y"),$image);
        
        $img=[
            
             'v_thumbnail_url'=>$thumbnail_image,
            ];
            
            VariationDetails::where('variation_id',$id)->update($img);
        
        }

        $data=[
                'v_name'=>$request->product_name,
                'v_description'=>$request->description,
                'valt_name'=>$request->alt_name,
                'v_sku'=>$request->sku,
                'v_color_name'=>$request->color_name,
                'v_color_code'=>$request->color_code,
                'v_quantity'=>$request->quantity,
                'v_old_price'=>$request->old_price,
                'v_new_price'=>$request->new_price,
                'v_youtube_video_url'=>$request->youtube_url,
                'v_new_arrival'=>$request->new_arrival,
                'v_is_returnable'=>$request->is_returnable,
                'v_is_active'=>$request->is_active,
        ];
           VariationDetails::where('variation_id',$id)->update($data);
        

    //     if($request->image_url != null){

    //         $image_url = $request->image_url;
    //         $i = 0;

    //     for($count = 0; $count < count($image_url); $count++){

    //     ++$i;
    //     $imageName=$image_url[$count]->getClientOriginalExtension();
    //     $image=$i.'_'.$request->alt_name.'.'.$imageName;
    //     $images = $image_url[$count]->move('productVariationImages/'. date("m-d-Y"),$image);

    //     $data = array(
    //     'variation_id' => $last_id,
    //     'v_image_url'  => $images,
    //     'valt_name'=>$image,
    //   );
    //      VariationImage::insert($data);
        
    // }
   
    // }

            return redirect()->route('variation.index')->with('msg','Variation Updated Successfully..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productid = VariationDetails::where('variation_id',$id)->first();
        $ids = $productid->product_id;
        VariationDetails::where('variation_id',$id)->delete();
        VariationImage::where('variation_id',$id)->delete();
        VariationBanner::where('variation_id',$id)->delete();
        $variation = VariationDetails::where('product_id',$ids)->get();

        if($variation->isEmpty()){

        $variation=['variation'=> 0 ];
        Product::where('id',$ids)->update($variation);

        }
          
        return redirect()->back()->with('msg','Variation Deleted Successfully..');
        
    }
}
