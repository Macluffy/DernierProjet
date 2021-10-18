<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;
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
        return view('backclass.create',compact('classe'));
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
            'nom' => ['required' => 'min:1', 'max:255'] ,
            'genre_id' => ['required' => 'min:1', 'max:255'],
            'horraire_id' => ['required' => 'min:1', 'max:255'],
            
        ]);
        
        
        $classe = new classe;
        $classe->image = $request->file('img')->hashName();
        $classe->titre = $request->titre;
        $classe->nom = $request->nom;
        $classe->horraire_id = $request->horraire_id;
        $classe->genre_id = $request->genre_id;
        

        
        
        
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
        return view('backclass.edit',compact('classe','classes'));
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
            'nom' => ['required' => 'min:1', 'max:255'] ,
            'genre_id' => ['required' => 'min:1', 'max:255'],
            'horraire_id' => ['required' => 'min:1', 'max:255'],
            
        ]);
        
        Storage::disk("public")->delete("/img/class".$classe->image);
        
        
        $classe->image = $request->file('img')->hashName();
        $classe->titre = $request->titre;
        $classe->nom = $request->nom;
        $classe->horraire_id = $request->horraire_id;
        $classe->genre_id = $request->genre_id;
        

        
        
        
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
