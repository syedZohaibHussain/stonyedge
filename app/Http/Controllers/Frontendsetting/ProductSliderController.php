<?php

namespace App\Http\Controllers\Frontendsetting;

use App\Http\Controllers\Controller;
use App\Models\Frontendsetting\ProductSlider;
use App\Models\Frontendsetting\SliderDetails;
use App\Models\Frontendsetting\SliderImage;
use App\Models\Frontendsetting\SectionLayout;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Category\Categories;
use DB;


class ProductSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = ProductSlider::all();
        $categories = Categories::all();
        return view('Frontendsetting/productslider',compact('sliders','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('Frontendsetting/addproductslider',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=[

                'name'=>$request->name,
                'category_id'=>$request->category_id,
                'description'=>$request->description,
        ];
        ProductSlider::create($data);
        return redirect()->route('productslider.index')->with('msg','Slider Created Successfully..');
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
        $data=[

                'name'=>$request->name,
                'category_id'=>$request->category_id,
                'description'=>$request->description,
        ];
        ProductSlider::where('id',$id)->update($data);
        return redirect()->route('productslider.index')->with('msg','Slider Updated Successfully..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductSlider::where('id',$id)->delete();
        return redirect()->route('productslider.index')->with('msg','Slider Deleted Successfully..');
    }
    public function Text()
    {
         $sliders = DB::table('slider_details')->select('*','slider_details.id as ids')
         ->join('product_sliders','product_sliders.id','=','slider_details.product_sliders_id')
         ->join('section_layouts','section_layouts.id','=','slider_details.section_layout_id')
         ->get();
         $images = SliderImage::all();
         $products = Product::all();
        return view('texting',compact('sliders','images','products'));
    }
}
