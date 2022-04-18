<?php

namespace App\Http\Controllers\RedeemVoucher;

use App\Http\Controllers\Controller;
use App\Models\RedemVoucher\Redeem;
use Illuminate\Http\Request;

class RedeemControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voucher = Redeem::all();
        return view('RedeemVoucher/listvoucher',compact('voucher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RedeemVoucher/addvoucher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = array(
       'code'=> $request->redeem_code,
       'redeem_amount' =>  $request->amount,
       'expiry_date' => $request->expiry_date,
       'description' => $request->description,

       

        );
        Redeem::insert($data);
         return redirect('listvoucher')->with('msg','Voucher Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RedemVoucher\Redeem  $redeem
     * @return \Illuminate\Http\Response
     */
    public function show(Redeem $redeem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RedemVoucher\Redeem  $redeem
     * @return \Illuminate\Http\Response
     */
    public function edit(Redeem $redeem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RedemVoucher\Redeem  $redeem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Redeem $redeem,$id)
    {
        
         $data = array(
       'code'=> $request->redeem_code,
       'redeem_amount' =>  $request->amount,
       'expiry_date' => $request->expiry_date,
       'description' => $request->description,

       

        );
        
        Redeem::where('id',$id)->update($data);

         return redirect('listvoucher')->with('msg','Voucher Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RedemVoucher\Redeem  $redeem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Redeem $redeem,$id)
    {
        Redeem::destroy(array('id',$id));
       return redirect('listvoucher')->with('msg','Voucher Deleted Successfully');
    }
}
