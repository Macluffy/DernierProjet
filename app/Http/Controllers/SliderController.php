<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize("Enter1", Slider::class);

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
        $this->authorize("Enter1", Slider::class);

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
            'titre' => ['required' => 'min:1', 'max:255' ],
            'paragraphe' => ['required' => 'min:1', 'max:255' ],
            'minititre' => ['required' => 'min:1', 'max:255'] ,
            'btnreadmore' => ['required' => 'min:1', 'max:255'],
            
        ]);

        $sliders = Slider::all();
        $slider = new Slider;
        $slider->imagefond = $request->file('img')->hashName();
        $slider->titre = $request->titre;
        $slider->paragraphe = $request->paragraphe;
        $slider->minititre = $request->minititre;
        $slider->btnreadmore = $request->btnreadmore;
        $slider->order = $request->order;
        $slider->save();
        if($slider->order == true){

            foreach ( $sliders as $value )
            {
                $value->order = false;
                $value->save();
            }
            
            
        }

        $request->file('img')->storePublicly("img/slider", "public");
        


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
    
        $this->authorize("Enter1", $slider);

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
        $this->authorize("Enter1", $slider);

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
            'titre' => ['required' => 'min:1', 'max:255' ],
            'paragraphe' => ['required' => 'min:1', 'max:255' ],
            'minititre' => ['required' => 'min:1', 'max:255'] ,
            'btnreadmore' => ['required' => 'min:1', 'max:255'],
            
        ]);
        
        $sliders = Slider::all();
        if ($request->file('img') != null) {
            Storage::disk("public")->delete("/img/slider".$slider->imagefond);
            $slider->imagefond = $request->file('img')->hashName();
            $request->file('img')->storePublicly("img/slider", "public");
            
        };
        $slider->titre = $request->titre;
        $slider->paragraphe = $request->paragraphe;
        $slider->minititre = $request->minititre;
        $slider->btnreadmore = $request->btnreadmore;
        $slider->order = $request->order;


        
        

        if($slider->order == true){

            foreach ( $sliders as $value )
            {
                $value->order = false;
                $value->save();
            }

        }
        
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
        $this->authorize("Enter1", $slider);

        Storage::disk("public")->delete("/img/slider".$slider->imagefond);
        $slider->delete();
        return redirect()->route('slider.index');
    }
}
