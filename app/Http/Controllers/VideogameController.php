<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public $videogames = [
        ['id' => 1, 'name' => 'GTA5','date' => '2013-01-01', 'console' => 'PS5', 'img' => 'https://static-it.gamestop.it/images/products/304447/3max.jpg'],
        ['id' => 2, 'name' => 'Final Fantasy XV','date' => '2014-02-01', 'console' => 'PS4', 'img' => 'https://static-it.gamestop.it/images/products/285875/3max.jpg'],
        ['id' => 3, 'name' => 'Hogwarts Legacy','date' => '2023-03-01', 'console' => 'PS4', 'img' => 'https://static-it.gamestop.it/images/products/310213/3max.jpg'],
        ['id' => 4, 'name' => 'FIFA23','date' => '2023-04-01', 'console' => 'PS5', 'img' => 'https://static-it.gamestop.it/images/products/308404/3max.jpg'],
        ['id' => 5, 'name' => 'God of War Ragnarok','date' => '2022-05-01', 'console' => 'PS5', 'img' => 'https://static-it.gamestop.it/images/products/309576/3max.jpg'],
    ];

    public function videogame_index() {
        return view('videogames', ['videogames' => $this->videogames]);
    }

    public function videogame_show($id) {
        foreach ($this->videogames as $videogame) {
            if ($videogame['id'] == $id) {
                return view('dettaglio', ['videogame' => $videogame]);
            };
        };
    }
}