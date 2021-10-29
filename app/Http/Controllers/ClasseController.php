<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class=Classe::all();

        
        return view('backclass.index',compact('class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classe=Classe::all();
        $classes= DB::table('classes')->where('order',true)->get();
        return view('backclass.create',compact('classe','classes'));
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
            
            'image' => ['required' => 'min:1', 'max:255' ],
            'titre' => ['required' => 'min:1', 'max:255' ],
            'genre_id' => ['required' => 'min:1', 'max:255'],
            'horraire_id' => ['required' => 'min:1', 'max:255'],
            'quantiter' => ['required'],
            
        ]);
        
        
        $classe = new classe;
        $classe->image = $request->file('img')->hashName();
        $classe->titre = $request->titre;
        $text = auth()->user();
        $classe->nom = $text->name;
        $classe->quantiter = $request->quantiter;
        $classe->horraire_id = $request->horraire_id;
        $classe->genre_id = $request->genre_id;
        $classe->jour_id = $request->jour_id;
        $classe->date_id = $request->jour_id;
        $classe->order = $request->order;

            
        
        $classe->save();
        

        
        $request->file('img')->storePublicly("img/class", "public");
        


        return redirect()->route('classe.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        return view('backclass.show',compact('classe'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {
        $classes = classe::all();
        $classes1 = DB::table('classes')->where('order',true)->get();
        return view('backclass.edit',compact('classe','classes1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $classe)
    {
        $request->validate([
            
            'image' => ['required' => 'min:1', 'max:255' ],
            'titre' => ['required' => 'min:1', 'max:255' ],
            'genre_id' => ['required' => 'min:1', 'max:255'],
            'horraire_id' => ['required' => 'min:1', 'max:255'],
            'quantiter' => ['required'],

        ]);
        
        Storage::disk("public")->delete("/img/class".$classe->image);
        $classe->image = $request->file('img')->hashName();
        $classe->titre = $request->titre;
        $text = auth()->user();
        $classe->nom = $text->name;
        $classe->quantiter = $request->quantiter;
        $classe->horraire_id = $request->horraire_id;
        $classe->genre_id = $request->genre_id;
        $classe->jour_id = $request->jour_id;
        $classe->date_id = $request->jour_id;
        $classe->order = $request->order;

        
        
        
        $classe->save();

        
        $request->file('img')->storePublicly("img/class", "public");
        


        return redirect()->route('classe.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        Storage::disk("public")->delete("/img/class".$classe->image);
        $classe->delete();
        return redirect()->route('classe.index');
    }
}
