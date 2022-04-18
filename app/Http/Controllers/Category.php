<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category\Categories;
use App\Models\Category\SubCategory;
use App\Models\Category\ChildSubCategory;
use App\Models\Brands\Brands;
use App\Models\Specifications\Specification;
use App\Models\Brands\Selected_brands;
use App\Models\Product\Product;
use Carbon\Carbon;

class Category extends Controller
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
    public function index(Request $request)
    {
        
        if($request->id != null){
            
            $category = Categories::where('parent_id',$request->id)->get();
        }else{
         
        $category = Categories::all();
        }
        $brands = Brands::all();
        $categories = Categories::all();
        return view('categoryList',compact('categories','brands','category'));
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
        if($request->cat_image != null){

        $imageName=$request->cat_image->getClientOriginalExtension();
        $image=$request->cat_name.'.'.$imageName;
        $image_url = $request->cat_image->move('categoryImages/'. date("m-d-Y"),$image);
        $data=[

        'name'=>$request->cat_name,
        'description'=>$request->cat_description,
        'image_url'=>$image_url,
        'parent_id'=>$request->parent_id,

        ];
        }else{
            
            
       $data=[

        'name'=>$request->cat_name,
        'description'=>$request->cat_description,
        'parent_id'=>$request->parent_id,

        ];
            
        }

       $last_id = Categories::Create($data)->cat_id;
       
        return redirect()->back()->with('msg','Category Created Successfully..');

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
       
        if($request->image_url != null ){
        unlink($request->old_image_url);
        $imageName=$request->image_url->getClientOriginalExtension();
        $image=$request->cat_name.'.'.$imageName;
        $image_url = $request->image_url->move('categoryImages/'. date("m-d-Y"),$image);

        $img=[

        'image_url'=>$image_url,

        ];
        Categories::where('cat_id',$id)->update($img);

        }
        if($request->image != null ){
        
        $imageName=$request->image->getClientOriginalExtension();
        $image=$request->cat_name.'.'.$imageName;
        $image_url = $request->image->move('categoryImages/'. date("m-d-Y"),$image);

        $img=[

        'image_url'=>$image_url,

        ];
        Categories::where('cat_id',$id)->update($img);

        }
        
        $data=[

        'name'=>$request->cat_name,
        'description'=>$request->cat_description,
        'parent_id'=>$request->parent_id,

        ];

        Categories::where('cat_id',$id)->update($data);
        

        return redirect()->back()->with('msg','Category Updated Successfully..');
    }
    public function addTag(Request $request, $id){
dd($request->all());
$tag_equal = $request->equal;
$tag_specification = $request->tag_specification;
$conditional = $request->conditional;


if($tag_equal != null){
      
        for($count = 0; $count < count($tag_equal); $count++){
     if($tag_equal[$count] != null) {
      
      

        $data = array(
        'category_id' => $id,
        'key'  => $tag_specification[$count],
        'constrain' => $tag_equal[$count],
        'value' => $conditional[$count],
        'entity'=>'Product',
       );
         
         SubCategory::insert($data);
        
    }
        }
}
        return redirect()->back()->with('msg','Category Updated Successfully..');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function destroy($id)

    {
        $category=Categories::where('cat_id',$id)->first();

$categories=Categories::all();
$products=Product::all();

   
        

  $count=0;
  $productCount=0;
           foreach ($categories as $value) {
            if($id == $value->parent_id){
                ++$count;
             }
           
         }
         if($count !=0)
         {

           return redirect()->back()->with('msg','Sorry we cannot delete '.$category->name.' Category, because '.$count.' child category exist on it.');  
         }
          foreach ($products as $value) {
            if($id == $value->category_id){
                ++$productCount;
             }
          }
          if($productCount !=0)
         {

           return redirect()->back()->with('msg','Sorry we cannot delete '.$category->name.' Category, because '.$productCount.' products of this category exist on it.');  
         }
         

            if($category->parent_id == 0){
            $category->delete();
            Specification::where('cat_id',$id)->delete();
            Selected_brands::where('cat_id',$id)->delete();
            return redirect()->back()->with('msg','Category deleted successfully');   
        }


            
    }

    public function ChildSubCategory()
    {
        $categories = Categories::all();
        return view('addSubChildCategory',compact('categories'));
    }

    public function SubCategory()
    {
        $categories = Categories::all();
        return view('addSubCategory',compact('categories'));
    }

    public function ChildSubcatStore(Request $request)
    {
        
        $imageName=$request->child_image->getClientOriginalExtension();
        $image=$request->child_name.'.'.$imageName;
        $image_url = $request->child_image->move('SubChildCategoryImages/'. date("m-d-Y"),$image);
        $data=[

        'sub_id'=>$request->sub_id,
        'name'=>$request->child_name,
        'slug'=>$request->child_slug,
        'description'=>$request->child_description,
        'image_url'=>$image_url,
        'sort'=>$request->child_sort,

        ];

        ChildSubCategory::FirstOrCreate($data);
        return redirect()->back()->with('msg','Successfully create sub-child-category');
    }

    public function SubcatStore(Request $request)
    {

        $imageName=$request->sub_image->getClientOriginalExtension();
        $image=$request->sub_name.'.'.$imageName;
        $image_url = $request->sub_image->move('SubCategoryImages/'. date("m-d-Y"),$image);
        $data=[

        'cat_id'=>$request->cat_id,
        'name'=>$request->sub_name,
        'slug'=>$request->sub_slug,
        'description'=>$request->sub_description,
        'image_url'=>$image_url,
        'sort'=>$request->sub_sort,

        ];

        SubCategory::FirstOrCreate($data);
        return redirect()->back()->with('msg','Successfully create sub-category');
    }
    public function addcategory()
    {
        $brands = Brands::all();
        $categories = Categories::all();
        return view('addCategory',compact('brands','categories'));
    }


    public function getsubCategories(Request $request)
    {
          $data['subcategories'] = Selected_brands::where("cat_id",$request->category_id)
                    ->get(["brand_id","brand_name"]);
        return response()->json($data);
    }

    public function getsubchildCategories(Request $request)
    {
          $data['subchildcategories'] = Specification::where("cat_id",$request->category_id)
                    ->get(["spec_id","field"]);
        return response()->json($data);
    }

    public function indexsubcategory()
    {
        $subcategories = subCategory::all();
        return view('subcategory',compact('subcategories'));
    }

    public function indexchildcategory()
    {
        $subchildcategories= ChildSubCategory::all();
        return view('childcategory',compact('subchildcategories'));
    }
}
