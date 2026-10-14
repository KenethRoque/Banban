<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about');
Route::view('/home', 'home');
Route::view('/childhood', 'childhood');
Route::view('/family', 'family');
Route::view('/dreams', 'dreams');