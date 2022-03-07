<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    use HasFactory;


    public function genere(): BelongsToMany  {
        return $this->belongsToMany(Genre::class,'movies_x_genres','id_movie','id_genre');
    }

    public function actor() {
        return $this->belongsToMany(Actor::class,'actorx_movies','id_movie','id_actor');
    }

    public function scopeGenereWhole($query)
    {
        return $query->orderBy('title')
            ->take(10);
	}

    public function scopeWhereParamEq($query, $param, $paramEq)
    {
        return $query->where($param, $paramEq);
	}

    public function scopeOrderby($query, $param)
    {
        return $query->orderBy($param);
	}

    public function scopeLimit($query, $n)
    {
        return $query->take($n);
	}
    public function scopeMyScope($query)
    {
        return $query->where('id','>=',1);
	}
    public function scopeMyjoin($query)
    {
        return $query->join('movies_x_genres', 'movies.id', 'id_movie')
            ->join('genres', 'id_genre', 'genres.id')
            ->select('movies.*', 'name as gname');
	}
    public function scopeDefaultJoin($query)
    {
        /**
         * vista: search/search-bar
         * Join por defecto
         * provee de los siguientes campos
         * pelicula.titulo, pelicula.urlImagen, pelicula.nombre genero, pelicula.nombre director
         * siguiente campo agregado (array) nombre de actores
         *  ** !! si es filtrado por actor solo dara un actor en el resultado !!
         *
         * los campos Raw son requeridos para realizar la conversión a array de el campo actores
         */
        return $query->join('movies_x_genres', 'movies.id', 'movies_x_genres.id_movie')
            ->join('genres', 'id_genre', 'genres.id')
            ->join('directorx_movies', 'movies.id','directorx_movies.id_movie')
            ->join('directors', 'directorx_movies.id_director','directors.id')
            ->join('actorx_movies as am', 'movies.id','am.id_movie')
            ->join('actors as a', 'am.id_actor','a.id')
            ->select('movies.title','movies.urlFile','genres.name as gname','dname')
            ->selectRaw('group_concat(a.aname) as actorarr')
            ->groupByRaw('movies.title,movies.urlFile,gname,dname');
	}
    public function scopeActorJoin($query)
    {
        return $query->join('actorx_movies as fam', 'movies.id','fam.id_movie')
        ->join('actors as fa', 'fam.id_actor','fa.id');
	}
    public function scopeActor($query, $actor)
    {
        return $query->where('fa.aname',$actor);
	}
    public function scopeGenere($query, $genre)
    {
        return $query->where('name',$genre);
	}
    public function scopeGenereIn($query, $genres)
    {
        /**
         * whereIn
         * funciona como where pero el parametro es un array de 1 o varios valores
         * en la vista de search, los campos tipo checkbox se almacenan en un array
         * ejemplo: name="genere[]"
         * devido a esto se puede filtrar por mas de un genero a la vez
         * Explicado con genero pero aplicable a genero y tipo (serie/peli)
         */
        return $query->whereIn('name',$genres);
	}
    public function scopeTitle($query, $title)
    {
        return $query->where('title','like','%' . $title  .'%');
	}
    public function scopeType($query, $type)
    {
        return $query->wherein('type',$type);
	}
    public function scopeDirector($query, $director)
    {
        return $query->where('dname',$director);
	}
}
