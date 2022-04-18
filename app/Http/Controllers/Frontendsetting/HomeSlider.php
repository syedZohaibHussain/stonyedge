<?php

namespace App\Http\Controllers\Frontendsetting;

use App\Http\Controllers\Controller;
use App\Models\Frontendsetting\ProductSlider;
use App\Models\Frontendsetting\SliderDetails;
use App\Models\Frontendsetting\SliderImage;
use App\Models\Frontendsetting\SectionLayout;
use Illuminate\Http\Request;

class HomeSlider extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = SliderDetails::all();
        return view('Frontendsetting/homeslider',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders = ProductSlider::all();
        $sections = SectionLayout::all();
        return view('Frontendsetting/addhomeslider',compact('sliders','sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->main_image != null ){

        $imageName=$request->main_image->getClientOriginalExtension();
        $image=$request->alt_name.'.'.$imageName;
        $main_image = $request->main_image->move('SectionMainImages/'. date("m-d-Y"),$image);

    }else{

        $main_image ='';
    }

        $data=[
            'product_sliders_id'=> $request->product_slider_id,
            'section_layout_id'=> $request->layout_id,
            'name'=> $request->section_name,
            'sort'=> $request->sort_no,
            'description'=> $request->description,
            'main_image'=> $main_image,
            'main_url'=> $request->main_url,
            'bg_color'=> $request->bg_color,
            'alt_name'=> $request->alt_name,
            'color_status'=> 1,
        ];
        $last_id = SliderDetails::create($data)->id;

        

        $image_url = $request->section_image;
        $i = 0;
        for($count = 0; $count < count($image_url); $count++){

        ++$i;
        $imageName=$image_url[$count]->getClientOriginalExtension();
        $image=$request->alt_name.'_'.$i.'.'.$imageName;
        $images = $image_url[$count]->move('SectionImages/'. date("m-d-Y"),$image);

        $data_slider = array(
        'slider_details_id' => $last_id,
        'image_url'  => $images,
       );
         SliderImage::insert($data_slider);
    }
    return redirect()->route('homeslider.index')->with('msg','Slider Created Successfully..');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sliders = ProductSlider::all();
        $sections = SectionLayout::all();
        $details = SliderDetails::where('id',$id)->first();
        $images = SliderImage::where('slider_details_id',$id)->get();
        return view('Frontendsetting/edithomeslider',compact('sliders','sections','details','images'));
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
       if($request->main_image != null ){

        unlink($request->old_main_image);
        $imageName=$request->main_image->getClientOriginalExtension();
        $image=$request->alt_name.'.'.$imageName;
        $main_image = $request->main_image->move('SectionMainImages/'. date("m-d-Y"),$image);

    }else{

        $main_image = $request->old_main_image;
    }

        $data=[
            'product_sliders_id'=> $request->product_slider_id,
            'section_layout_id'=> $request->layout_id,
            'name'=> $request->section_name,
            'sort'=> $request->sort_no,
            'description'=> $request->description,
            'main_image'=> $main_image,
            'main_url'=> $request->main_url,
            'bg_color'=> $request->bg_color,
            'color_status'=> 1,
        ];
        SliderDetails::where('id',$id)->update($data);

        

        $image_url = $request->section_image;
        $i = 0;
        if($image_url != null){
        for($count = 0; $count < count($image_url); $count++){

        ++$i;
        $imageName=$image_url[$count]->getClientOriginalExtension();
        $image=$request->alt_name.'_'.$i.'.'.$imageName;
        $images = $image_url[$count]->move('SectionImages/'. date("m-d-Y"),$image);

        $data_slider = array(
        'slider_details_id' => $id,
        'image_url'  => $images,
       );
         SliderImage::insert($data_slider);
    }
}

        $imgid = $request->imgID;
        if($imgid != null){
        for($count = 0; $count < count($imgid); $count++){

         SliderImage::where('id',$imgid[$count])->delete();
    }
}

    $ids = $request->ids;
    $ids_name = $request->image_name;
    $ids_url = $request->image_url;
    if($ids != null){
        for($count = 0; $count < count($ids); $count++){

       

        $image_details = array(
        'url' => $ids_url[$count],
        'name'  => $ids_name[$count],
       );
         SliderImage::where('id',$ids[$count])->update($image_details);
    }
    }


    return redirect()->route('homeslider.index')->with('msg','Slider Updated Successfully..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SliderDetails::where('id',$id)->delete();
        SliderImage::where('slider_details_id',$id)->delete();
        return redirect()->route('homeslider.index')->with('msg','Slider Deleted Successfully..');

    }
}
