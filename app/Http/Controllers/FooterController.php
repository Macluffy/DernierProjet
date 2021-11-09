<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::all();

        $this->authorize("Enter1", Footer::class);
        return view('backfooter.index',compact('footer'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        $this->authorize("Enter1", $footer);

        $footer= Footer::all();

        
        return view('backfooter.edit',compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            'logo' => ['required' => 'min:1', 'max:255' ],
            'p1' => ['required' => 'min:1', 'max:255'],
            'icon1' => ['required' => 'min:1', 'max:255' ],
            'p2' => ['required' => 'min:1', 'max:255'],
            'icon2' => ['required' => 'min:1', 'max:255' ],
            'p3' => ['required' => 'min:1', 'max:255'],
            'icon3' => ['required' => 'min:1', 'max:255' ],
            'p4' => ['required' => 'min:1', 'max:255'],
            'titre1' => ['required' => 'min:1', 'max:255' ],
            'icon4' => ['required' => 'min:1', 'max:255'],
            'p5' => ['required' => 'min:1', 'max:255' ],
            'link1' => ['required' => 'min:1', 'max:255'],
            'contenu1' => ['required' => 'min:1', 'max:255' ],
            'icon5' => ['required' => 'min:1', 'max:255'],
            'p6' => ['required' => 'min:1', 'max:255' ],
            'link2' => ['required' => 'min:1', 'max:255'],
            'contenu2' => ['required' => 'min:1', 'max:255' ],
            'titre2' => ['required' => 'min:1', 'max:255'],
            'btn' => ['required' => 'min:1', 'max:255' ],
            'span1' => ['required' => 'min:1', 'max:255'],
            'span2' => ['required' => 'min:1', 'max:255' ],
            'span3' => ['required' => 'min:1', 'max:255'],
        ]);

        if ($request->file('logo') != null) {
            Storage::disk("public")->delete("/img/logo/".$footer->logo);
            $footer->logo = $request->file('logo')->hashName();
            $request->file('logo')->storePublicly("img/logo", "public");
            
        };
        $footer->p1 = $request->p1;
        $footer->icon1 = $request->icon1;
        $footer->p2 = $request->p2;
        $footer->icon2 = $request->icon2;
        $footer->p3 = $request->p3;
        $footer->icon3 = $request->icon3;
        $footer->p4 = $request->p4;
        $footer->titre1 = $request->titre1;
        $footer->icon4 = $request->icon4;
        $footer->p5 = $request->p5;
        $footer->link1 = $request->link1;
        $footer->contenu1 = $request->contenu1;
        $footer->icon5 = $request->icon5;
        $footer->p6 = $request->p6;
        $footer->link2 = $request->link2;
        $footer->contenu2 = $request->contenu2;
        $footer->titre2 = $request->titre2;
        $footer->btn = $request->btn;
        $footer->span1 = $request->span1;
        $footer->span2 = $request->span2;
        $footer->span3 = $request->span3;
        

        

        $footer->save();


        return redirect()->route('footer.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
    
    }
}
