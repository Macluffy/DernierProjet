<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;


    protected $fillable = [
        'image',
        'titre',
        'nom',
        'genre_id',
        'horraire_id',
        'jour_id',
        'date_id',
        
    ];


    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function horraire(){
        return $this->belongsTo(Horraire::class);
    }

    public function jour(){
        return $this->belongsTo(Jour::class);
    }
    public function date(){
        return $this->belongsTo(Date::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function inscriptions(){
        return $this->hasMany(Inscription::class);
    }

    // public function inscription(){
    //     return $this->belongsTo(Inscription::class);
    // }
    
}
