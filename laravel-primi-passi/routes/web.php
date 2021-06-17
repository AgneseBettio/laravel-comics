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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', function() {
    return view('home', [
    'name' => 'Mario',
    'surname' => 'Rossi',
    'role' => 'capitano',
    ]);
})->name('home');
Route::get('/team_sandro', function() {
    return view('team_sandro', [
    'name' => 'Sandro',
    'surname' => 'Mauro',
    'role' => 'vice-capitano',
    ]);
})->name('team_sandro');
 Route::get('/team_giorgio', function() {
     return view('team_giorgio', [
     'name' => 'Giorgio',
     'surname' => 'Vanno',
     'role' => 'attaccante',
     ]);
 })->name('team_giorgio');
 Route::get('/team_alberto', function() {
     return view('team_alberto', [
     'name' => 'Alberto',
     'surname' => 'Cassano',
     'role' => 'difensore',
     ]);
 })->name('team_alberto');