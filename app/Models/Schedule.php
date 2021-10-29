<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table="schedules";

    protected $fillable=["time","jour1_id","jour2_id","jour3_id","jour4_id","jour5_id","jour6_id","jour7_id","h1","h2","h3","h4"];

    

    public function jours(){
        return $this->hasMany(Jour::class);
    }
}
