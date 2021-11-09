<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize("Enter1", Classe::class);
        $about=About::all();

        
        return view('backabout.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $this->authorize("Enter1", $about);
        return view('backabout.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'titre' => ['required' => 'min:1', 'max:255' ],
            'paragraphe1' => ['required' => 'min:1', 'max:255' ],
            'paragraphe2' => ['required' => 'min:1', 'max:255' ],
            'btn' => ['required' => 'min:1', 'max:255'] ,
            'image' => ['required' => 'min:1', 'max:255'],
            'video' => ['required' => 'min:1', 'max:255'],
            
        ]);
        
        
        
        if ($request->file('img') != null) {
            Storage::disk("public")->delete("/img/about".$about->image);
            $about->image = $request->file('img')->hashName();
            $request->file('img')->storePublicly("img/about", "public");
        };
        $about->titre = $request->titre;
        $about->paragraphe1 = $request->paragraphe1;
        $about->paragraphe2 = $request->paragraphe2;
        $about->btn = $request->btn;
        $about->video = $request->video;
        
        $about->save();

        return redirect()->route('about.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $this->authorize("Enter1", $about);

        Storage::disk("public")->delete("/img/slider".$about->image);
        $about->delete();
        return redirect()->route('about.index');
    }
}
