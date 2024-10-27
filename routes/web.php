<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/tateti', function () {
    return view('games.tateti');
});
Route::get('/pong', function () {
    return view('games.pong');
});
Route::get('/snake', function () {
    return view('games.snake');
});
Route::get('/memoria', function () {
    return view('games.memoria');
});
Route::get('/adivinarnumero', function () {
    return view('games.adivinarnumero');
});