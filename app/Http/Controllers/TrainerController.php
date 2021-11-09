<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize("Enter1", Trainer::class);

        $trainer=Trainer::all();

        
        return view('backtrainer.index',compact('trainer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("Enter1", Trainer::class);

        $trainer=Trainer::all();
        $user = DB::table('users')->where('role_id',3)->get();

        
        return view('backtrainer.create',compact('trainer','user'));
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
            'icon1' => ['required' => 'min:1', 'max:255' ],
            'lien1' => ['required' => 'min:1', 'max:255' ],
            'icon2' => ['required' => 'min:1', 'max:255' ],
            'lien2' => ['required' => 'min:1', 'max:255' ],
            'icon3' => ['required' => 'min:1', 'max:255' ],
            'lien3' => ['required' => 'min:1', 'max:255' ],
            'icon4' => ['required' => 'min:1', 'max:255' ],
            'lien4' => ['required' => 'min:1', 'max:255' ],
        ]);

        
        
        $trainer = new Trainer;
        $trainer->image = $request->file('img')->hashName();
        $trainer->titre = $request->titre;
        $trainer->icon1 = $request->icon1;
        $trainer->lien1 = $request->lien1;
        $trainer->icon2 = $request->icon2;
        $trainer->lien2 = $request->lien2;
        $trainer->icon3 = $request->icon3;
        $trainer->lien3 = $request->lien3;
        $trainer->icon4 = $request->icon4;
        $trainer->lien4 = $request->lien4;
        $trainer->user_id = $request->user_id;
        $trainer->save();



        return redirect()->route('trainer.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        $this->authorize("Enter1", $trainer);

        return view('backtrainer.show',compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        $this->authorize("Enter1", $trainer);

        $user = DB::table('users')->where('role_id',3)->get();
        return view('backtrainer.edit',compact('trainer','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $request->validate([
            'image' => ['required' => 'min:1', 'max:255' ],
            'titre' => ['required' => 'min:1', 'max:255' ],
            'icon1' => ['required' => 'min:1', 'max:255' ],
            'lien1' => ['required' => 'min:1', 'max:255' ],
            'icon2' => ['required' => 'min:1', 'max:255' ],
            'lien2' => ['required' => 'min:1', 'max:255' ],
            'icon3' => ['required' => 'min:1', 'max:255' ],
            'lien3' => ['required' => 'min:1', 'max:255' ],
            'icon4' => ['required' => 'min:1', 'max:255' ],
            'lien4' => ['required' => 'min:1', 'max:255' ],
            
        ]);

        if ($request->file('img') != null) {
            Storage::disk("public")->delete("/img/trainer/".$trainer->image);
            $trainer->image = $request->file('img')->hashName();
            $request->file('img')->storePublicly("img/trainer/", "public");
            
        };
        
        
        $trainer->titre = $request->titre;
        $trainer->icon1 = $request->icon1;
        $trainer->lien1 = $request->lien1;
        $trainer->icon2 = $request->icon2;
        $trainer->lien2 = $request->lien2;
        $trainer->icon3 = $request->icon3;
        $trainer->lien3 = $request->lien3;
        $trainer->icon4 = $request->icon4;
        $trainer->lien4 = $request->lien4;
        $trainer->user_id = $request->user_id;
        $trainer->save();
        
        

        
        


        return redirect()->route('trainer.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        $this->authorize("Enter1", $trainer);

        Storage::disk("public")->delete("/img/trainer/".$trainer->image);
        $trainer->delete();
        return redirect()->route('trainer.index');
    }
}
