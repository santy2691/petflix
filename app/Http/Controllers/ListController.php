<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\View;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    

    public function favoritos(Request $request){
        $favs = $request->session()->get('favorites', []);
        array_push($favs, $request->id);
        $request->session()->put('favorites', $favs);

        return redirect()->back();
    }



    public function viewFavoritos(Request $request) {
        // recupero la coleccion de favoritos de la session
        $colectionFavorites =  $request->session()->all();
        $colectionViews = View::viewMoviesUSer(Auth::id())->get();

        $movies = ['favorites' => [],
                    'views' => []];
        
        // verifico si existe en l session favoritos  
        if ($request->session()->exists('favorites')) {
            $moviesFavorites = Movie::whereIn('id',$colectionFavorites['favorites'])->get();
            $movies['favorites']  = $moviesFavorites;
        }
        
        // verifico si hay peliculas vistas en la base de datos 
        if ($colectionViews->count() > 0) {
            $movies['views'] =  $colectionViews;
        }
        return view('home')->with('movieCollection',$movies)->with('serieCollection',[]);
        

    }

    public function viewWatch(Request $request) {
        // verifico el id del usuario y la pelicula que vera 
        $user = Auth::id();
        $id_movie = $request->id_movie;

        // agrego la info a la base de datos 
        $view = View::create([
            'id_movie' => $id_movie,
            'id_user' => $user,
        ]);
        /*
         esto es para buscar la url de las peliculas pero como siempre tenemos
         el mismo video no esta implementado 
        $urlMovie = Movie::where('id',$id_movie)->get()->url;
        */
        $urlMovie = "/video/Spider-Man.mp4";
        $view->save();

        return view('watch')->with(['urlMovie' => $urlMovie]);
    }
}
