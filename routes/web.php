<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
* home
*   -login
*       -home list
*       -search
*       -user settings
*       -favourites/for you
*       -watch a film
*   -signup
*       -payment
*
* admin
*   -users
*   -movies
*       -add
*       -modify
*/


//home page pre login
Route::get('/', function () {
    return view("prehome");
});

//payment
Route::post('/payment', function () {
    return view("payment");
})->middleware('auth');

Route::get('/payment', function () {
    return view("payment");
})->middleware('auth');

//home list
Route::post('/home', [HomeController::class, 'getHomeMovies'])->middleware('auth');
Route::get('/home', [HomeController::class, 'getHomeMovies'])->middleware('auth')->name('home');
Route::get('/home/{id}', [ListController::class, 'favoritos'])->middleware('auth');

// Home/sidebar search
Route::post('/search', [HomeController::class, 'searchHome'])->name('searchVids')->middleware('auth');
Route::get('/search', [HomeController::class, 'getSearch'])->middleware('auth');

Route::get('/search/{title}', [HomeController::class, 'capitulosSeries'])->middleware('auth');
//user data settigns
Route::get('user_settings',[HomeController::class,'userSettings'])->middleware('auth');

//user data settigns controlador
Route::post('/user/settings', function () {
    //controlador
});

//favourites and for you lists
Route::get('/watchlists',[ListController::class,'viewFavoritos'])->middleware('auth')->name('lista');


//watching file interface
Route::get('/watch/{id_movie}', [ListController::class,'viewWatch']
)->middleware('auth');

require __DIR__.'/auth.php';
 
