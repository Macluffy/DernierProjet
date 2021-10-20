<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table="dates";
    
    protected $fillable=["calendrier"];



    public function jour(){
        return $this->belongsTo(Jour::class);
    }
}
