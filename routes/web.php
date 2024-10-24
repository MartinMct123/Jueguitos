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