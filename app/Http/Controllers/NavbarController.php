<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nav= Navbar::all();
        return view('backnav.index',compact('nav'));
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
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function show(Navbar $navbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Navbar $navbar)
    {
        return view('backnav.edit',compact('navbar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navbar $navbar)
    {
        
        $request->validate([
            'logo' => ['required' => 'min:1', 'max:255' ],
            'link1' => ['required' => 'min:1', 'max:255'] ,
            'link2' => ['required' => 'min:1', 'max:255'],
            'link3' => ['required' => 'min:1', 'max:255' ],
            'link4' => ['required' => 'min:1', 'max:255'] ,
            'link5' => ['required' => 'min:1', 'max:255']
        ]);
        

        $navbar->logo = $request->logo;
        $navbar->link1 = $request->link1;
        $navbar->link2 = $request->link2;
        $navbar->link3 = $request->link3;
        $navbar->link4 = $request->link4;
        $navbar->link5 = $request->link5;
        

        $navbar->save();


        return redirect()->route('navbar.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navbar $navbar)
    {
        //
    }
}
