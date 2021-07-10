<?php

use Illuminate\Support\Arr;
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


Route::get('/', function () {

    return view('home');
})->name('home');


/* Comics Routes */

Route::get('/comics', function () {

    $comics = config('comics');
    // dd($ncomics);
    return view('comics.index', $comics);
})->name('comics');


Route::get('/comics/{id}', function ($id) {

    $comics = config('comics.data');

    if (is_numeric($id) && $id < count($comics) && $id >= 0) {
        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    } else {
        abort(404);
    }
})->name('comic');
/* /Comics Routes */


Route::get('/characters', function () {

    return view('characters');
})->name('characters');


Route::get('/movies', function () {

    return view('movies');
})->name('movies');


Route::get('/tv', function () {

    return view('tv');
})->name('tv');


Route::get('/games', function () {

    return view('games');
})->name('games');


Route::get('/news', function () {

    return view('news');
})->name('news');


Route::get('/shop', function () {

    return view('shop');
})->name('shop');
