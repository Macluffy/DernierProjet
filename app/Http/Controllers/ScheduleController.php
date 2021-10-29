<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule=Schedule::all();

        
        return view('backschedule.index',compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schedule=Schedule::all();

        
        return view('backschedule.create',compact('schedule'));
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
            'time' => ['required' => 'min:1', 'max:255' ],
            'jour1_id' => ['required' => 'min:1', 'max:255' ],
            'jour2_id' => ['required' => 'min:1', 'max:255' ],
            'jour3_id' => ['required' => 'min:1', 'max:255' ],
            'jour4_id' => ['required' => 'min:1', 'max:255' ],
            'jour5_id' => ['required' => 'min:1', 'max:255' ],
            'jour6_id' => ['required' => 'min:1', 'max:255' ],
            'jour7_id' => ['required' => 'min:1', 'max:255' ],
            'h1' => ['required' => 'min:1', 'max:255' ],
            'h2' => ['required' => 'min:1', 'max:255'] ,
            'h3' => ['required' => 'min:1', 'max:255'],
            'h4' => ['required' => 'min:1', 'max:255' ],
            
        ]);

        
        
        $schedule = new Schedule;
        $schedule->time = $request->time;
        $schedule->jour1_id = $request->jour1_id;
        $schedule->jour2_id = $request->jour2_id;
        $schedule->jour3_id = $request->jour3_id;
        $schedule->jour4_id = $request->jour4_id;
        $schedule->jour5_id = $request->jour5_id;
        $schedule->jour6_id = $request->jour6_id;
        $schedule->jour7_id = $request->jour7_id;
        $schedule->h1 = $request->h1;
        $schedule->h2 = $request->h2;
        $schedule->h3 = $request->h3;
        $schedule->h4 = $request->h4;

        $schedule->save();
        return redirect()->route('schedule.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        return view('backschedule.show',compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        return view('backschedule.edit',compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'time' => ['required' => 'min:1', 'max:255' ],
            'jour1_id' => ['required' => 'min:1', 'max:255' ],
            'jour2_id' => ['required' => 'min:1', 'max:255' ],
            'jour3_id' => ['required' => 'min:1', 'max:255' ],
            'jour4_id' => ['required' => 'min:1', 'max:255' ],
            'jour5_id' => ['required' => 'min:1', 'max:255' ],
            'jour6_id' => ['required' => 'min:1', 'max:255' ],
            'jour7_id' => ['required' => 'min:1', 'max:255' ],
            'h1' => ['required' => 'min:1', 'max:255' ],
            'h2' => ['required' => 'min:1', 'max:255'] ,
            'h3' => ['required' => 'min:1', 'max:255'],
            'h4' => ['required' => 'min:1', 'max:255' ],
            
        ]);

        $schedule = Schedule::all();
        $schedule->time = $request->time;
        $schedule->jour1_id = $request->jour1_id;
        $schedule->jour2_id = $request->jour2_id;
        $schedule->jour3_id = $request->jour3_id;
        $schedule->jour4_id = $request->jour4_id;
        $schedule->jour5_id = $request->jour5_id;
        $schedule->jour6_id = $request->jour6_id;
        $schedule->jour7_id = $request->jour7_id;
        $schedule->h1 = $request->h1;
        $schedule->h2 = $request->h2;
        $schedule->h3 = $request->h3;
        $schedule->h4 = $request->h4;
        $schedule->save();
        
        return redirect()->route('schedule.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        
        $schedule->delete();
        return redirect()->route('schedule.index');
    }
}
