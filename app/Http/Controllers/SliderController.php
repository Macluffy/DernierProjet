<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Slider::all();
        return view('backslide.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slider=Slider::all();
        return view('backslide.create',compact('slider'));
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
            'imagefond' => ['required' => 'min:1', 'max:255' ],
            'minititre' => ['required' => 'min:1', 'max:255'] ,
            'btnreadmore' => ['required' => 'min:1', 'max:255'],
            
        ]);
        
        $slider = new Slider;
        
        $slider->imagefond = $request->imagefond;
        $slider->minititre = $request->minititre;
        $slider->btnreadmore = $request->btnreadmore;
        

        $slider->save();


        return redirect()->route('slider.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('backslide.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('backslide.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'imagefond' => ['required' => 'min:1', 'max:255' ],
            'minititre' => ['required' => 'min:1', 'max:255'] ,
            'btnreadmore' => ['required' => 'min:1', 'max:255'],
            
        ]);
        
        
        
        $slider->imagefond = $request->imagefond;
        $slider->minititre = $request->minititre;
        $slider->btnreadmore = $request->btnreadmore;
        

        $slider->save();


        return redirect()->route('slider.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('slider.index');
    }
}
