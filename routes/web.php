<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('chi-siamo');

Route::get('/services', function () {
    return view('services');
})->name('servizi');

Route::get('/videogames', function(){;
$videogames = [
    ['id' => 1, 'name' => 'GTA5','date' => '2013-01-01', 'console' => 'PS5', 'img' => 'https://static-it.gamestop.it/images/products/304447/3max.jpg'],
    ['id' => 2, 'name' => 'Final Fantasy XV','date' => '2014-02-01', 'console' => 'PS4', 'img' => 'https://static-it.gamestop.it/images/products/285875/3max.jpg'],
    ['id' => 3, 'name' => 'Hogwarts Legacy','date' => '2023-03-01', 'console' => 'PS4', 'img' => 'https://static-it.gamestop.it/images/products/310213/3max.jpg'],
    ['id' => 4, 'name' => 'FIFA23','date' => '2023-04-01', 'console' => 'PS5', 'img' => 'https://static-it.gamestop.it/images/products/308404/3max.jpg'],
    ['id' => 5, 'name' => 'God of War Ragnarok','date' => '2022-05-01', 'console' => 'PS5', 'img' => 'https://static-it.gamestop.it/images/products/309576/3max.jpg'],
];

    return view('videogames', ['videogames' => $videogames]);
})->name('videogames');

Route::get('/videogames/dettaglio/{id}', function ($id) {
    $videogames = [
        ['id' => 1, 'name' => 'GTA5','date' => '2013-01-01', 'console' => 'PS5', 'img' => 'https://static-it.gamestop.it/images/products/304447/3max.jpg'],
        ['id' => 2, 'name' => 'Final Fantasy XV','date' => '2014-02-01', 'console' => 'PS4', 'img' => 'https://static-it.gamestop.it/images/products/285875/3max.jpg'],
        ['id' => 3, 'name' => 'Hogwarts Legacy','date' => '2023-03-01', 'console' => 'PS4', 'img' => 'https://static-it.gamestop.it/images/products/310213/3max.jpg'],
        ['id' => 4, 'name' => 'FIFA23','date' => '2023-04-01', 'console' => 'PS5', 'img' => 'https://static-it.gamestop.it/images/products/308404/3max.jpg'],
        ['id' => 5, 'name' => 'God of War Ragnarok','date' => '2022-05-01', 'console' => 'PS5', 'img' => 'https://static-it.gamestop.it/images/products/309576/3max.jpg'],
    ];

    forEach($videogames as $videogame) {
        if ($videogame['id'] == $id) {
            return view('dettaglio', ['videogame' => $videogame]);
        };
    };


    return view('dettaglio');
})->name('videogames-dettaglio');