<?php

namespace App\Http\Controllers;

use App\Models\Messagerie;
use Illuminate\Http\Request;

class MessagerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize("Enter1", Messagerie::class);

        $messagerie= Messagerie::all();
        return view('backmessagerie.index',compact('messagerie'));
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

        $messagerie = new Messagerie;
        $messagerie->name = $request->name;
        $messagerie->email = $request->email;
        $messagerie->msg = $request->msg;

        $messagerie->save();

        return redirect()->route('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Messagerie  $messagerie
     * @return \Illuminate\Http\Response
     */
    public function show(Messagerie $messagerie)
    {
                $this->authorize("Enter1", $messagerie);

        return view('backmessagerie.show',compact('messagerie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Messagerie  $messagerie
     * @return \Illuminate\Http\Response
     */
    public function edit(Messagerie $messagerie)
    {


    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Messagerie  $messagerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messagerie $messagerie)
    {
        $this->authorize("Enter1", $messagerie);
        if ($request->name != null) {
            $messagerie->name = $request->name;
        };
        
        if ($request->email  != null) {
            $messagerie->email  = $request->email ;
        };

        if ($request->msg  != null) {
            $messagerie->msg  = $request->msg ;
        };

        $messagerie->couleur = 'true';
        $messagerie->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Messagerie  $messagerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messagerie $messagerie)
    {
        $this->authorize("Enter1", $messagerie);
        $messagerie->delete();
        return redirect()->route('messagerie.index');
    }
}
