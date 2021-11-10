<?php

namespace App\Http\Controllers;

use App\Mail\Amail;
use App\Mail\Email;
use App\Models\Adressemail;
use App\Models\Classe;
use App\Models\ClasseTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use mysqli;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->authorize("Enter", Classe::class);
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
        
        
        $tag = Tag::all();
        $classe=Classe::all();
        $classes= DB::table('classes')->where('order',true)->get();
        return view('backclass.create',compact('tag','classe','classes'));
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
            'genre_id' => ['required' => 'min:1', 'max:255'],
            'horraire_id' => ['required' => 'min:1', 'max:255'],
            'quantiter' => ['required'],
            'abo' => ['required'=> 'min:1', 'max:255'],
        ]);
        // $tab = [];
        // foreach ($$request->tag_id as $tag ) {
        //     array_push($tab,intval($tag));
        // }
        
        $classe = new classe;
        $classe->image = $request->file('img')->hashName();
        $classe->titre = $request->titre;
        $text = auth()->user()->email;
        $classe->nom = $text;
        $classe->quantiter = $request->quantiter;
        $classe->horraire_id = $request->horraire_id;
        $classe->genre_id = $request->genre_id;
        $classe->jour_id = $request->jour_id;
        $classe->date_id = $request->jour_id;
        $classe->order = $request->order;
        $classe->abo = $request->abo;
        $classe->save();
        $classe->tags()->attach($request->tag_id);
        $contenuMail = ["titre" =>$request->titre];


        $email = Adressemail::All();
        foreach ($email as $value) {
            Mail::to($value->nom)->send(new Amail($contenuMail));
        }
        
        
        $request->file('img')->storePublicly("img/class", "public");

        return redirect()->route('classe.index')->with("message", "Datas has succesfully been changed !");

        // Mail::to("ahriga.a@hotmail.com")->send(new Email("Le cour $classe->titre a été creer"));

        // function sendMail(Request $request,$message) {

        //     $contenuMail = [
        //         "message"=> $message,
        //         "email"=>$request->email
        //     ];
    
        //     Mail::to($contenuMail['email'])->send(new Email($contenuMail['message']));
    
        //     return "message envoyé";
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        $this->authorize("Enter", $classe);
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
        $this->authorize("Enter", $classe);
        $tag = Tag::all();
        $classes = classe::all();
        $classes1 = DB::table('classes')->where('order',true)->get();
        return view('backclass.edit',compact('tag','classe','classes1'));
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
            'genre_id' => ['required' => 'min:1', 'max:255'],
            'horraire_id' => ['required' => 'min:1', 'max:255'],
            'quantiter' => ['required'],

        ]);
        if ($request->file('img') != null) {
            Storage::disk("public")->delete("/img/class".$classe->image);
            $classe->image = $request->file('img')->hashName();
            $request->file('img')->storePublicly("img/class", "public");
            
        };

        $classe->titre = $request->titre;
        $text = auth()->user();
        $classe->nom = $text->name;
        $classe->quantiter = $request->quantiter;
        if ($request->horraire_id != null) {
            
            $classe->horraire_id = $request->horraire_id;
            
            
        };
        
        if ($request->genre_id  != null) {
            
            $classe->genre_id  = $request->genre_id ;
            
            
        };

        if ($request->jour_id  != null) {
            
            $classe->jour_id  = $request->jour_id ;
            
            
        };


            
        $classe->date_id  = $request->jour_id ;
            
            
        
        if ($request->order  != null) {
            
            $classe->order  = $request->order ;
            
            
        };
        if ($request->filtre  != null) {
            
            $classe->filtre  = $request->filtre ;
            
            
        };
        if ($request->abo  != null) {
            
            $classe->abo  = $request->abo ;
            
            
        };
        
        
        
        $classe->tags()->sync($request->tag_id);
        $classe->save();

        
        


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
