<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','image','titre','icon1','icon2','icon3','icon4'

    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
