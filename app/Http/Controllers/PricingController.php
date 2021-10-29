<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $princing=Pricing::all();

        
        return view('backpricing.index',compact('princing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $princing=Pricing::all();

        
        return view('backpricing.create',compact('princing'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pack' => ['required' => 'min:1', 'max:255' ],
            'prix' => ['required' => 'min:1', 'max:255' ],
            'month' => ['required' => 'min:1', 'max:255'] ,
            'li1' => ['required' => 'min:1', 'max:255'],
            'li2' => ['required' => 'min:1', 'max:255'],
            'li3' => ['required' => 'min:1', 'max:255'],
            'li4' => ['required' => 'min:1', 'max:255'],
            'btn' => ['required' => 'min:1', 'max:255'] ,
            
        ]);

        
        $pricing = new Pricing;
        $pricing->pack = $request->pack;
        $pricing->prix = $request->prix;
        $pricing->month = $request->month;
        $pricing->li1 = $request->li1;
        $pricing->li2 = $request->li2;
        $pricing->li3 = $request->li3;
        $pricing->li4 = $request->li4;
        $pricing->btn = $request->btn;
        $pricing->save();
        return redirect()->route('pricing.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricing $pricing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricing $pricing)
    {
        //
    }
}
