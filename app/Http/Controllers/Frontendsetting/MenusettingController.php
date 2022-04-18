<?php

namespace App\Http\Controllers\Frontendsetting;

use App\Http\Controllers\Controller;
use App\Models\Frontendsetting\Menusetting;
use App\Models\Category\Categories;
use App\Models\Brands\Brands;
use Illuminate\Http\Request;

class MenusettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $brands = Brands::all();
         $categories = Categories::all();
        $menu = Menusetting::all();
        return view('Frontendsetting/listmenu',compact('menu','brands','categories'));
    }
   public function block(Request $request,$id)
    {
        
        if ($request->block) {

            $data=[

                'is_active' => 1,

            ];

             Menusetting::where('id','=',$id)->update($data);
             return redirect()->back()->with('message','Menu Active Successfully');
           
        }
        else{

            $data=[

                'is_active' => 0,

            ];

             Menusetting::where('id','=',$id)->update($data);
              return redirect()->back()->with('message','Menu Inactive Successfully');

        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $brands = Brands::all();
         $categories = Categories::all();
        return view('Frontendsetting/addmenu',compact('brands','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $imageName=$request->banner_image1->getClientOriginalExtension();
        $image=$request->menu_name.'.'.$imageName;
        $ban1_url = $request->banner_image1->move('MenubannerImages/'. date("m-d-Y"),$image);
        $imageName=$request->banner_image2->getClientOriginalExtension();
        $image=2..$request->menu_name.'.'.$imageName;
        $ban2_url = $request->banner_image2->move('MenubannerImages/'. date("m-d-Y"),$image);

        $data = array(
        'menu_name'=> $request->menu_name,
        'menu_url' =>  $request->menu_url,
        'sort_no' => $request->sort_no,
        'brand_id' => $request->brand_id,
        'category_id' => $request->category_id,
        'banner_image1' => $ban1_url, 
        'banner_image2' => $ban2_url,
         'banner1_url' => $request->banner1_url,
         'banner2_url' => $request->banner2_url
           );
         Menusetting::create($data);
        return redirect('listmenu')->with('msg','Menu Added Successfully');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frontendsetting\Menusetting  $menusetting
     * @return \Illuminate\Http\Response
     */
    public function show(Menusetting $menusetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontendsetting\Menusetting  $menusetting
     * @return \Illuminate\Http\Response
     */
    public function edit(Menusetting $menusetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontendsetting\Menusetting  $menusetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menusetting $menusetting,$id)
    {
        if($request->banner_image1 != null){

        unlink($request->old_banner_image1);

        $imageName=$request->banner_image1->getClientOriginalExtension();
        $image=$request->menu_name.'.'.$imageName;
        $ban_url = $request->banner_image1->move('MenubannerImages/'. date("m-d-Y"),$image);     
            

        $data = array(
         
            'banner_image1' => $ban_url,
       );
       
       Menusetting::where('id',$id)->update($data);
    }
    if($request->banner_image2 != null){

        unlink($request->old_banner_image2);

        $imageName=$request->banner_image2->getClientOriginalExtension();
        $image=2..$request->menu_name.'.'.$imageName;
        $ban_url2 = $request->banner_image2->move('MenubannerImages/'. date("m-d-Y"),$image);     
            

        $data = array(
         
            'banner_image2' => $ban_url2,
       );
       
       Menusetting::where('id',$id)->update($data);
    }

        $data = array(
         'menu_name'=> $request->menu_name,
       'menu_url' =>  $request->menu_url,
       'sort_no' => $request->sort_no,
       'brand_id' => $request->brand_id,
       'category_id' => $request->category_id,
         'banner1_url' => $request->banner1_url,
         'banner2_url' => $request->banner2_url
       );
    

        Menusetting::where('id',$id)->update($data);
        return redirect('listmenu')->with('msg','Category Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontendsetting\Menusetting  $menusetting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Menusetting::destroy(array('id',$id));
        return redirect('listmenu')->with('msg','Menu Deleted Successfully');
    }
}
