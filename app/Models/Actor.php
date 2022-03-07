<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    
    public function movie() {
        return $this->belongsToMany(Movie::class,'actorxMovie','id_actor','id_movie');
    }
}
