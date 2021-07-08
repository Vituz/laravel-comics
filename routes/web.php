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

Route::get('/', function () {

    $comics = config('comics');

    $data = [
        'menu' =>  [
            'characters',
            'comics',
            'movie',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ]
    ];

    // dd($comics);
    return view('comics', $comics, $data);
})->name('comics');


Route::get('/characters', function () {

    return view('characters');
})->name('characters');
