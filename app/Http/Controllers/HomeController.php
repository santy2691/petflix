<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\HomePostRequest;
use App\Http\Requests\SearchFormRequest;
use App\Models\View;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    /**
     * Loads movies into home
     * returns: an array list of movies in genere containers
     */

    public function getHomeMovies(Request $request)
    {
        // busco todos los generos que hay en la bd
        $generes = Genre::all();
        $collections = [];
        $serieCollections = [
            'series' => Movie::select('title','imagen','urlFile')->where('type','serie')->distinct()->get()
        ];
        

        foreach ($generes as $genere) {
            $colection = $this->getGenere($genere->name)->where('type','movie')->get();
            // verifico que hay laguna pelicula de este genero
            if ($colection->count() > 0) {
                $collections += [$genere->name => $colection];
            }
        }
        
        return view('home')->with('movieCollection', $collections)->with('serieCollection',$serieCollections);
    }

    /**
     * interacts with the DB/Model to get the movies
     * returns: $movies a list of movies of a single genere
     */

    public function getGenere($genere)
    {
        $movie = Movie::query();
        $movies = $movie->myjoin();
        $movies = $movie->genere($genere);
        return $movies;
    }

    /**
     * Home search bar processing
     * returns: a list of movies matching the text entered, by title alone
     */
    public function searchHome(HomePostRequest $request)
    {
        // si el form procede de la sidebar cargar metodo de sidebar (filtros)
        if ($request->isSidebar) {
            return $this->searchForm($request);
        }
        // form procede de home
        $movie = Movie::query();
        $movies = $movie->defaultJoin();
        $movies = $movie->title($request->title);
        return view('search')->with('movies', $movies->get())->with('searchTerm', $request->title);
    }
    /**
     * Proporciona ruta para el FormRequest (GET)
     */
    public function getSearch()
    {
        $movie = Movie::query();
        $movies = $movie->defaultJoin();
        return view('search')->with('movies', $movies->distinct()->get())->with('searchTerm', '');
    }
    /**
     * Metodo Search de la sidebar en /search
     * returns: lista de peliculas
     */
    public function searchForm($request)
    {
        /**
         * ->flash()
         * permite que en el formulario se utilice con exito el metodo valie="{{old('genere)}}"
         * haciendo asi posible que los valores antiguos del formulario queden almacenados
         */
        $request->flash();
        // se genera una query a la que se le añaden filtros acumulativamente
        // ej. filtrar por type y genere
        $movie = Movie::query();
        /**
         * $request->title
         * es el termino de busqueda por titulo (p.e. spiderman)
         * cuando desde la home buscamos en la navbar, al cargar la vista search
         * esta se rellena con el termino recivido desde homecontroller -> searchTerm
         *
         * EXPLICACIÓN DE IFs
         * en este controller con los IFs se comprueva si el campo contiene info o no
         * si el campo contiene info se filtra por ese campo acumulativamente
         */
        if ($request->title)
            $movies = $movie->title($request->title);
        // join nsecesario para campos: genero,tipo,director y actor
        $movies = $movie->defaultJoin();
        // explicación de whereIn: los campos type y genere toman un array que almacena el valor/valores totales
        // para filtrar por mas de un valor
        if ($request->type)
            $movies = $movie->type($request->type);
        if ($request->genere) {
            $movies = $movie->genereIn($request->genere);
        }
        if ($request->director)
            $movies = $movie->director($request->director);
        if ($request->actor){
            $movies= $movie->actorJoin();
            $movies = $movie->actor($request->actor);
        }
        // '->distinct()' distinct evita la repeticion de filas/resultado
        // searchTerm => se usa para mostrar el titulo por el que se filtra en la vista
        return view('search')->with('movies', $movies->distinct()->get())->with('searchTerm', $request->title);
    }

    function userSettings(Request $request) {
        return view('user_settings');
    }

    public function capitulosSeries(Request $request)
    {   
        $title = urldecode($request->title);
        $movies = [$title => Movie::title($title)->get()];
        
        return view('home')->with('movieCollection', $movies)->with('serieCollection',[]);
    }
}
 