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
Route::get('/', function() {
    return view('home');
})->name('home');

Route::get('/current_series', function () {
    $datiCurrentSeries = config("comics");

    $datiView = [
        "comicsList" => $datiCurrentSeries
    ];

    /* return view("products", [
        ""current_series" => $datiCurrentSeries
    ]); */
    
    return view("current_series", $datiView );
})->name("current_series");