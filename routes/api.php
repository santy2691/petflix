<?php

use App\Http\Controllers\MovieApiController;
use App\Http\Controllers\UserApiController;
use App\Http\Resources\UserCollection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 


// ruta para logear al usuario
Route::post('/login',[UserApiController::class,'login']);

// ruta para registrar nuevo usuario 
Route::post('/registrer',[UserApiController::class,'registrer']);


Route::group(['middleware' => ['auth:sanctum']], function () {

    // listar todas las peliculas
    Route::get('/peliculas',[MovieApiController::class,'listAllMovies']);

    // buscar pelicula por id
    route::get('/pelicula/{id}',[MovieApiController::class,'listMoviesForId']);

    
    // listar todas las peliculas por genero
    Route::get('/peliculas/genero/{genero}',[MovieApiController::class,'listAllMoviesForGenere']);

    // listar todas las peliculas por tipo (series o peliculas)
    Route::get('/peliculas/tipo/{tipo}',[MovieApiController::class,'listMoviesForType']);

    // lista peliculas por titulo 
    Route::get('/peliculas/titulo/{titulo}',[MovieApiController::class,'listMoviesForTitle']);

    // listar generos 
    Route::get('/generos',[MovieApiController::class,'listGenere']); 

    // listar capitulo de serie especifica 
    Route::get('/serie/{title}/temporada/{temporada}/capitulo/{capitulo}',[MovieApiController::class,'listSerieSpecific']);

   
    // rutas de admin
    // solo puedes ser admin para estas rutas 
    Route::middleware(['authAdmin'])->group( function () {
        // listar todos los usuarios
        Route::get('/usuarios',[UserApiController::class,'allUser']);
        // borrar usuario 
        Route::delete('/usuario/{id}',[UserApiController::class,'deleteUer']);
    
        // actualizar pelicula
        Route::put('/pelicula/{id}',[MovieApiController::class,'updateMovie']);

        // eliminar pelicula 
        Route::delete('/pelicula/{id}',[MovieApiController::class,'deleteMovie']);

    });
 

    // middlerare para verificar si el usuario puede hacer esa funcion o tiene que ser admin
    Route::middleware(['authUpdateUser'])->group( function () {
        // modificar usuario por id 
        Route::put('/usuario/{id}',[UserApiController::class,'updateUser']);
        // listar usuario por id 
        Route::get('/usuario/{id}',[UserApiController::class,'getUser']);

    });

    // cerrar sesion 
    Route::get('/logout',[UserApiController::class,'logout']);

});
