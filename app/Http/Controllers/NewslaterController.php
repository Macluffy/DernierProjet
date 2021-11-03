<?php

namespace App\Http\Controllers;

use App\Models\newslater;
use Illuminate\Http\Request;

class NewslaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newslater=newslater::all();

        
        return view('backnewslater.index',compact('newslater'));
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\newslater  $newslater
     * @return \Illuminate\Http\Response
     */
    public function show(newslater $newslater)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\newslater  $newslater
     * @return \Illuminate\Http\Response
     */
    public function edit(newslater $newslater)
    {
        $newslater=Newslater::all();

        
        return view('backnewslater.edit',compact('newslater'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\newslater  $newslater
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newslater $newslater)
    {
        $request->validate([
            'titre' => ['required' => 'min:1', 'max:255' ],
            'btn' => ['required' => 'min:1', 'max:255'],
        ]);


        $newslater->titre = $request->titre;
        $newslater->btn = $request->btn;
        

        $newslater->save();


        return redirect()->route('newslater.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\newslater  $newslater
     * @return \Illuminate\Http\Response
     */
    public function destroy(newslater $newslater)
    {
        //
    }
}
