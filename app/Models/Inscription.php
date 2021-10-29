<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $table="inscriptions";
    
    protected $filable=["classe_id","nom"];

    public function classe(){
        return $this->belongsTo(Classe::class);
    }
    // public function classes(){
    //     return $this->hasMany(Classe::class);
    // }
}