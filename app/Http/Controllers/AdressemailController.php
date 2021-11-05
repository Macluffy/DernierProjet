<?php

namespace App\Http\Controllers;

use App\Models\adressemail;
use Illuminate\Http\Request;

class AdressemailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/home');
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
        
        $adress = new Adressemail;
        $adress->nom = $request->nom;
        $adress->save();

        return redirect()->route('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adressemail  $adressemail
     * @return \Illuminate\Http\Response
     */
    public function show(adressemail $adressemail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adressemail  $adressemail
     * @return \Illuminate\Http\Response
     */
    public function edit(adressemail $adressemail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adressemail  $adressemail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adressemail $adressemail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adressemail  $adressemail
     * @return \Illuminate\Http\Response
     */
    public function destroy(adressemail $adressemail)
    {
        //
    }
}
