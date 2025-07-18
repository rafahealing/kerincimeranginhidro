<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('home');


Route::get('/program', function () {
    return view('program');
})->name('program');


// details
Route::get('/details/card-a-detail', function () {
    return view('details/card-a-detail');
})->name('details/card-a-detail');

