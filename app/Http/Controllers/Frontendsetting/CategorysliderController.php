<?php

namespace App\Http\Controllers\Frontendsetting;

use App\Http\Controllers\Controller;
use App\Models\Frontendsetting\Categoryslider;
use Illuminate\Http\Request;

class CategorysliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryslider = Categoryslider::all();
        return view('Frontendsetting/listcategoryslider',compact('categoryslider'));
    }
    public function block(Request $request,$id)
    {
        
        if ($request->block) {

            $data=[

                'is_active' => 1,

            ];

             Categoryslider::where('id','=',$id)->update($data);
             return redirect()->back()->with('message','Category Active Successfully');
           
        }
        else{

            $data=[

                'is_active' => 0,

            ];

             Categoryslider::where('id','=',$id)->update($data);
              return redirect()->back()->with('message','Category Inactive Successfully');

        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Frontendsetting/addcategoryslider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if($request->category_image != null ){
           $rand = rand();

        $imageName=$request->category_image->getClientOriginalExtension();
        $image=$rand.'_'.$request->category_name.'.'.$imageName;
        $cat_url = $request->category_image->move('CategorySliderImages/'. date("m-d-Y"),$image);

        $data = array(
       'category_name'=> $request->category_name,
       'description' =>  $request->description,
       'category_url' => $request->category_url,
       'category_image' => $cat_url 

        );
        Categoryslider::insert($data);
         return redirect('listcategoryslider')->with('msg','Category Slider Added Successfully');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frontendsetting\Categoryslider  $categoryslider
     * @return \Illuminate\Http\Response
     */
    public function show(Categoryslider $categoryslider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontendsetting\Categoryslider  $categoryslider
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoryslider $categoryslider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontendsetting\Categoryslider  $categoryslider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoryslider $categoryslider,$id)
    {
        if($request->category_image != null){

        unlink($request->old_category_image);

        $imageName=$request->category_image->getClientOriginalExtension();
        $image=$request->category_name.'.'.$imageName;
        $cat_url = $request->category_image->move('CategorySliderImages/'. date("m-d-Y"),$image);     
            

        $data = array(
         'category_name'=> $request->category_name,
       'description' =>  $request->description,
       'category_url' => $request->category_url,
         'category_image' => $cat_url 


       );
    }else{

        $data = array(
        'category_name'=> $request->category_name,
       'description' =>  $request->description,
       'category_url' => $request->category_url,
        


       );
    }

        Categoryslider::where('id',$id)->update($data);
        return redirect('listcategoryslider')->with('msg','Category Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontendsetting\Categoryslider  $categoryslider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoryslider $categoryslider,$id)
    {
        $categoryslider = Categoryslider::where('id',$id)->first();
       unlink($categoryslider->category_image);
        Categoryslider::destroy(array('id',$id));
       return redirect('listcategoryslider')->with('msg','Category SLider Deleted Successfully');
    }
}
