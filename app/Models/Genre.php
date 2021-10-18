<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table="genres";
    
    protected $fillable=["genre"];

    public function classes(){
        return $this->hasMany(Classe::class);
    }
}
