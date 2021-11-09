<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize("Enter1", Gallery::class);

        $gallery=Gallery::all();

        
        return view('backgalleri.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("Enter1", Gallery::class);

        $gallery=Gallery::all();

        
        return view('backgalleri.create',compact('gallery'));
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
            'img1' => ['required' => 'min:1', 'max:255' ],
            'img2' => ['required' => 'min:1', 'max:255' ],
            'icon' => ['required' => 'min:1', 'max:255' ],
            
            
        ]);

        
        
        $gallery = new Gallery;
        $gallery->img1 = $request->file('img1')->hashName();
        $gallery->img2 = $request->file('img2')->hashName();
        $gallery->icon = $request->icon;
        $request->file('img1')->storePublicly("img/portfolio/", "public");
        $request->file('img2')->storePublicly("img/portfolio/", "public");
        $gallery->save();
        return redirect()->route('gallery.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        $this->authorize("Enter1",$gallery);

        return view('backgalleri.show',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $this->authorize("Enter1",$gallery);

        return view('backgalleri.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'img1' => ['required' => 'min:1', 'max:255' ],
            'img2' => ['required' => 'min:1', 'max:255' ],
            'icon' => ['required' => 'min:1', 'max:255' ],
            
            
        ]);

        if ($request->file('img1') != null) {
            Storage::disk("public")->delete("/img/portfolio/".$gallery->img1);
            $gallery->img1 = $request->file('img1')->hashName();
            $request->file('img1')->storePublicly("img/portfolio/", "public");
        };
        if ($request->file('img2') != null) {
            Storage::disk("public")->delete("/img/portfolio/".$gallery->img2);
            $gallery->img2 = $request->file('img2')->hashName();
            $request->file('img2')->storePublicly("img/portfolio/", "public");
            
        };
        
        
        
        
        $gallery->icon = $request->icon;
        
        $gallery->save();
        return redirect()->route('gallery.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $this->authorize("Enter1",$gallery);

        Storage::disk("public")->delete("/img/portfolio/".$gallery->img1);
        Storage::disk("public")->delete("/img/portfolio/".$gallery->img2);

        $gallery->delete();
        return redirect()->route('gallery.index');
    }
}
