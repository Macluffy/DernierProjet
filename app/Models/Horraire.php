<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horraire extends Model
{
    use HasFactory;

    protected $table="horraires";
    
    protected $fillable=["heure"];



    public function classe(){
        return $this->hasMany(Classe::class);
    }
}
