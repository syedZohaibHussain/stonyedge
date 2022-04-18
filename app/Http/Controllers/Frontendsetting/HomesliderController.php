<?php

namespace App\Http\Controllers\Frontendsetting;

use App\Http\Controllers\Controller;
use App\Models\Frontendsetting\Homeslider;
use Illuminate\Http\Request;

class HomesliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $banner = Homeslider::all();
        return view('Frontendsetting/listbanner',compact('banner'));
    }
    
    
     public function ajaxBannerStatus(Request $request)
    {
        $data = $request->all();
        #create or update your data here

        return response()->json(['success'=>'Ajax request submitted successfully']);
    }
    
     public function block(Request $request,$id)
    {
        
        if ($request->block) {

            $data=[

                'is_active' => 1,

            ];

             Homeslider::where('id','=',$id)->update($data);
             return redirect()->back()->with('message','Banner Active Successfully');
           
        }
        else{

            $data=[

                'is_active' => 0,

            ];

             Homeslider::where('id','=',$id)->update($data);
              return redirect()->back()->with('message','Banner Inactive Successfully');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Frontendsetting/addbanner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->banner_image != null ){

        $imageName=$request->banner_image->getClientOriginalExtension();
        $image=$request->banner_name.'.'.$imageName;
        $banner_url = $request->banner_image->move('FrontSliderImages/'. date("m-d-Y"),$image);

        $data = array(
        'banner_name' => $request->banner_name, 
        'sort_no'  => $request->sort_no,
        'banner_image' => $banner_url,
       );
         Homeslider::insert($data);
         return redirect('listbanner')->with('msg','Banner Added Successfully');
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frontendsetting\Homeslider  $homeslider
     * @return \Illuminate\Http\Response
     */
    public function show(Homeslider $homeslider)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontendsetting\Homeslider  $homeslider
     * @return \Illuminate\Http\Response
     */
    public function edit(Homeslider $homeslider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontendsetting\Homeslider  $homeslider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      
       if($request->banner_image != null){

        unlink($request->old_banner_image);

        $imageName=$request->banner_image->getClientOriginalExtension();
        $image=$request->banner_name.'.'.$imageName;
        $banner_image = $request->banner_image->move('FrontSliderImages/'. date("m-d-Y"),$image);     
            

        $data = array(
        'banner_name' => $request->banner_name, 
        'sort_no'  => $request->sort_no,
        'banner_image'=>$banner_image,


       );
    }else{

        $data = array(
        'banner_name' => $request->banner_name, 
        'sort_no'  => $request->sort_no,
        


       );
    }

        Homeslider::where('id',$id)->update($data);
        return redirect('listbanner')->with('msg','Banner Updated Successfully');
       

        

        



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontendsetting\Homeslider  $homeslider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $homebannner = Homeslider::where('id',$id)->first();
       unlink($homebannner->banner_image);
       Homeslider::destroy(array('id',$id));
       return redirect('listbanner')->with('msg','Banner Deleted Successfully');
   
    }
}
