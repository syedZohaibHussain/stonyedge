<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brands\Selected_brands;
use App\Models\Brands\Brands;
use App\Models\Category\Categories;
use App\Models\Product\Product;


class BrandsController extends Controller
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

        return view('addBrand');
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
        if($request->brand_image_logo != null ){

         $imageName=$request->brand_image_logo->getClientOriginalExtension();
        $image=$request->brand_name.'.'.$imageName;
        $logo_url = $request->brand_image_logo->move('BrandLogoImages/'. date("m-d-Y"),$image);
         $data=[
        'name'=>$request->brand_name,
        'description'=>$request->brand_description,
        'logo_url'=>$logo_url,
        ];
        }else{
           $data=[
        'name'=>$request->brand_name,
        'description'=>$request->brand_description,
        ];
        }
        $last_id = Brands::FirstOrCreate($data)->id;
        return redirect()->back()->with('msg','Brand Created Successfully..');
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
        if($request->logo_url != null ){
        unlink($request->old_logo_url);
        $imageName=$request->logo_url->getClientOriginalExtension();
        $image=$request->brand_name.'.'.$imageName;
        $logo_url = $request->logo_url->move('BrandLogoImages/'. date("m-d-Y"),$image);
        $logo=[
        'logo_url'=>$logo_url,
        ];
        Brands::where('brand_id',$id)->update($logo);
        }
        if($request->logo != null ){
        $imageName=$request->logo_url->getClientOriginalExtension();
        $image=$request->brand_name.'.'.$imageName;
        $logo_url = $request->logo_url->move('BrandLogoImages/'. date("m-d-Y"),$image);
        $logo=[
        'logo_url'=>$logo_url,
        ];
        Brands::where('brand_id',$id)->update($logo);
        }
        $data=[
        'name'=>$request->brand_name,
        'description'=>$request->brand_description,
        ];
        Brands::where('brand_id',$id)->update($data);
        return redirect()->back()->with('msg','Brand Updated Successfully..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $Brand=Brands::where('Brand_id',$id)->first();


$products=Product::all();

   
        

  $count=0;
 
       foreach ($products as $value) {
            if($id == $value->brand_id){
                ++$count;
             }
          }
          if($count !=0)
         {
           return redirect()->back()->with('msg','Sorry we cannot delete '.$Brand->name.' Brand, because '.$count.' products of this brand exist on it.');  
         }else{
            Brands::where('Brand_id',$id)->delete();
            return redirect()->back()->with('msg','Brand deleted successfully');   
        }
    }

    public function indexBrands()
    {
        $brands = Brands::all();
        return view('brandlist',compact('brands'));
    }
}
