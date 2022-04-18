<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
    }
    
    public function addressCreate($id)
    {
        // dd($id);
 return view('access/user/address/create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     // dd($request->all());
    if($request->default == 'active'){
           
 $default=1;
        $address=Address::where('user_id',$request->user_id)->where('default',1)->get();
        if($address->isNotEmpty()){
            
            Address::where('user_id',$request->user_id)->where('default',1)->update(['default'=>0]);

        }
      
        }
        else{
           
            $default=0;
        }
         $data=[
           'user_id'=>$request->user_id,
           'first_name'=>$request->first_name,
           'last_name'=>$request->last_name,
           'phone'=>$request->phone,
           'address_details'=>$request->address_details,
           // 'city'=>$request->city,
           'default'=>$default,
           'label'=>$request->label,
        ];

        $addressId=Address::firstOrCreate($data)->id;
           return redirect()->route('dashboard-address.show',$request->user_id)->with('msg','Address added successfully');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
          $addresses=Address::where('user_id',$id)->get();
       return view('access/user/address/show',compact('addresses','id'));
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
             if($request->default == 'active'){
           
          $default=1;
        $address=Address::where('user_id',$request->user_id)->where('default',1)->get();
        if($address->isNotEmpty()){
            
            Address::where('user_id',$request->user_id)->where('default',1)->update(['default'=>0]);

        }
      
        }
        else{
           
            $default=0;
        }

            Address::where('id',$id)->update([
           'first_name'=>$request->first_name,
           'last_name'=>$request->last_name,
           'phone'=>$request->phone,
           'address_details'=>$request->address_details,
           'default'=>$default,
           'label'=>$request->label
        ]);
            
        return redirect()->back()->with('msg','Address updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Address::where('id',$id)->delete();
       return redirect()->back()->with('msg','Address deleted successfully');
    }
}
