<?php

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
// Route::get('/', function() {
//     return view('home');
// })->name('home');

Route::get('/', function () {
    $datiCurrentSeries = config("comics");

    $datiView = [
        "comicsList" => $datiCurrentSeries
    ];

    /* return view("products", [
        ""home" => $datiCurrentSeries
    ]); */
    
    return view("home", $datiView );
})->name("home");

Route::get('/single_comics/{index}', function ($index) {
    $datiComics = config("comics");

    if(!is_numeric($index) || $index < 0 || $index > count($datiComics)-1){
        abort(404, "Fumetto inesistente");
    }

    $selectedComics = $datiComics[intval($index)];

    return view("single_comics", [
        'comics' => $selectedComics
    ]);
})->name("single_comics");