<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jour extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table="jours";

    protected $fillable=["day","date_id"];

    public function classe(){
        return $this->hasMany(Classe::class);
    }

    public function date(){
        return $this->hasMany(Date::class);
    }

    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }

}
