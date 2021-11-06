<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client=Client::all();

        
        return view('backclient.index',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client=Client::all();

        
        return view('backclient.create',compact('client'));
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
            'icon' => ['required' => 'min:1', 'max:255' ],
            'paragraphe' => ['required' => 'min:1', 'max:255'],
            'image' => ['required'  ],
            'titre' => ['required' => 'min:1', 'max:255'] ,
            
        ]);

        
        $client = new Client;
        $client->icon = $request->icon;
        $client->paragraphe = $request->paragraphe;
        $client->image = $request->file('image')->hashName();
        $client->titre = $request->titre;
        $request->file('image')->storePublicly("img/icon/","public");
        $client->save();


        return redirect()->route('client.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('backclient.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('backclient.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'icon' => ['required' => 'min:1', 'max:255' ],
            'paragraphe' => ['required' => 'min:1', 'max:255'],
            'image' => ['required' ],
            'titre' => ['required' => 'min:1', 'max:255'] ,
            
        ]);

        if ($request->file('image') != null) {
            Storage::disk("public")->delete("/img/icon/".$client->image);
            $client->image = $request->file('image')->hashName();
            $request->file('image')->storePublicly("img/icon", "public");
            
        };
        $client->icon = $request->icon;
        $client->paragraphe = $request->paragraphe;
        $client->titre = $request->titre;
        $client->save();


        return redirect()->route('client.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        Storage::disk("public")->delete("/img/icon/".$client->image);
        $client->delete();
        return redirect()->route('client.index');
    }
}
