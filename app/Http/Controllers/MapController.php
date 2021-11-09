<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize("Enter1", Map::class);
        $map=Map::all();

        
        return view('backmap.index',compact('map'));
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
     * @param  \App\Models\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function show(Map $map)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function edit(Map $map)
    {
        $this->authorize("Enter1", $map);

        $map=Map::all();

        
        return view('backmap.edit',compact('map'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Map $map)
    {
        $request->validate([
            'voie' => ['required' => 'min:1', 'max:255' ],
            'nom' => ['required' => 'min:1', 'max:255'],
            'numero' => ['required' => 'min:1', 'max:255' ],
            'ville' => ['required' => 'min:1', 'max:255'] ,
            
        ]);


        $map->voie = $request->voie;
        $map->nom = $request->nom;
        $map->numero = $request->numero;
        $map->ville = $request->ville;

        $map->save();


        return redirect()->route('map.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function destroy(Map $map)
    {
        $this->authorize("Enter1", $map);

        $map->delete();
        return redirect()->route('map.index');
    }
}
