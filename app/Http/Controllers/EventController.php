<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event=Event::all();

        
        return view('backevent.index',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event=Event::all();

        
        return view('backevent.create',compact('event'));
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
            'titre' => ['required' => 'min:1', 'max:255' ],
            'paragraphe' => ['required' => 'min:1', 'max:255' ],
            'date' => ['required' => 'min:1', 'max:255'] ,
            'heure' => ['required' => 'min:1', 'max:255'],
            
        ]);

        $events = Event::all();
        $event = new Event;
        $event->titre = $request->titre;
        $event->paragraphe = $request->paragraphe;
        $event->date = $request->date;
        $event->heure = $request->heure;
        $event->order = $request->order;
        $event->save();
        if($event->order == true){

            foreach ( $events as $value )
            {
                $value->order = false;
                $value->save();
            }
            
            
        }

        


        return redirect()->route('event.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('backevent.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('backevent.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            
            'titre' => ['required' => 'min:1', 'max:255' ],
            'paragraphe' => ['required' => 'min:1', 'max:255' ],
            'date' => ['required' => 'min:1', 'max:255'] ,
            'heure' => ['required' => 'min:1', 'max:255'],
            
        ]);
        
        $events = Event::all();

        $event->titre = $request->titre;
        $event->paragraphe = $request->paragraphe;
        $event->date = $request->date;
        $event->heure = $request->heure;

        if($event->order == true){

            foreach ( $events as $value )
            {
                $value->order = false;
                $value->save();
            }

        }
        $event->order = $request->order;
        $event->save();


        return redirect()->route('event.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('event.index');
    }
}
