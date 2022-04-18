<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currency = Currency::all();
        return view('setting/listcurrency',compact('currency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setting/addcurrency');
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
       'currency_code'=> $request->currency_code,
       'currency_symbol' =>  $request->currency_symbol,
       'currency_rate' => $request->currency_rate,
       

        );
        Currency::insert($data);
         return redirect('listcurrency')->with('msg','Currency Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currency $currency,$id)
    {
         $data = array(
        'currency_code' => $request->currency_code, 
        'currency_symbol'  => $request->currency_symbol,
        'currency_rate' => $request->currency_rate,
       );

        Currency::where('id',$id)->update($data);
        return redirect('listcurrency')->with('msg','Currency Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $currency,$id)
    {
         Currency::destroy(array('id',$id));
       return redirect('listcurrency')->with('msg','Currency Deleted Successfully');
    }
}
