<?php

use App\Http\Controllers\ruta;
use App\Http\Controllers\Rutas;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola/{nombre}', function ($nombre) {
    return "hola: $nombre";
});
Route::get('/hola/desconocido', function () {
    return "no te conozco";
});
Route::get('/hola', function () {
    return "hola";
}); */

/*Route::post('/hola', function () {
    return "hola";
}); */

/*una sola ruta */
/* Route::get('/', Ruta::class);//DECIR QUE SE IMPORTA EL ARCHIVO
Route::get('/hola',[Rutas::class,"hola"]);//DECIR QUE SE IMPORTA EL ARCHIVO
Route::get('/hola/{nombre}', [Rutas::class,"holaNombre"]);//DECIR QUE SE IMPORTA EL ARCHIVO */
//Route::get('/hola/{nombre?}', [Rutas::class,"holaNombre"]);//DECIR QUE SE IMPORTA EL ARCHIVO */

Route::get('/', Ruta::class)->name("index");//DECIR QUE SE IMPORTA EL ARCHIVO
Route::get('/hola',[Rutas::class,"hola"])->name("hola");//DECIR QUE SE IMPORTA EL ARCHIVO
Route::get('/holanombre/{nombre?}', [Rutas::class,"holaNombre"])->name("nombre");//DECIR QUE SE IMPORTA EL ARCHIVO