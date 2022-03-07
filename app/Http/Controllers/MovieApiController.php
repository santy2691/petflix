<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenreCollection;
use App\Http\Resources\GenreResource;
use App\Http\Resources\MovieCollection;
use App\Http\Resources\MovieResource;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieApiController extends Controller
{
    

    function listAllMovies() {
        return new MovieCollection(Movie::all());
    }

    function listAllMoviesForGenere(Request $request) {
        $genero = $request->genero;
        $movies = Genre::where('name',$genero);
        if ($movies->count() == 0) {
            return response()->json(['error' => 'no existe el genero ' .$genero],404);
        }
        return new MovieCollection($movies->first()->movies);
    }

    function listMoviesForType(Request $request) {
        $type = $request->tipo;
        $movies = Movie::where('type',$type);                        
        if ($movies->count() == 0) {
            return response()->json(['error' => 'no existe peliculas del tipo ' .$type],404);
        }
        return new MovieCollection($movies->get());
    }


    function listMoviesForTitle(Request $request) {
        $title = urldecode($request->titulo);
        $movies = Movie::where('title','LIKE', $title .'%');
        if ($movies->count() == 0) {
            return response()->json(['error' => 'no existe la pelicula con el titulo '  .$title],404);
        }
        return new MovieCollection($movies->get());
    }

    function listMoviesForId(Request $request) {
        $id = $request->id;
        $movie = Movie::find($id);
        if (!$movie) {
            return response()->json(["error" => "la pelicula no existe"],404);
        }
        return new MovieResource($movie);
    }

    function listGenere() {
        $generos = Genre::all();
        return new GenreCollection($generos);
    }
    

    function listSerieSpecific(Request $request) {
        $titulo = urldecode($request->title);
        $temporada = $request->temporada;
        $capitulo = $request->capitulo;
        $serie = Movie::where('title','LIKE',$titulo .'%')
                ->where('season',$temporada)
                ->where('chapter',$capitulo);
        if ($serie->count() == 0) {
            return response()->json(['error' => 'no existe el capitulo buscado'],404);
        }
        return new MovieCollection($serie->get());
    } 

    function updateMovie(Request $request) {
        $id = $request->id;
        $movie = Movie::find($id);
        if (!$movie) {
            return response()->json(["error" => "pelicula no existe"],404);
        }
        $movie->update($request->all());
        return new MovieResource($movie);
    }


    function deleteMovie(Request $request) {
        $id = $request->id;
        $movie = Movie::find($id);
        if (!$movie) {
            return response()->json(["error" => "pelicula no existe"],404);
        }
        $movie->delete();
        return new MovieResource($movie);

    }
}