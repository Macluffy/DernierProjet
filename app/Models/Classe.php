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
        'heure',
        'genre_id',
    ];


    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
