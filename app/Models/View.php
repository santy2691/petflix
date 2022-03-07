<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;


        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id_movie',
        'id_user',
    ];



    function scopeViewMoviesUSer($query, $idUser) {
        return $query->join('movies', 'movies.id','views.id_movie')
                    ->join('users','users.id','views.id_user')
                    ->where('views.id_user',$idUser)
                    ->select('movies.*')
                    ->distinct();
    }
}
