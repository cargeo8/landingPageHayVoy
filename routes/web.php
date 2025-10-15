<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/privacidad', function () {
    return view('privacidad');
})->name('privacidad');

Route::get('/terminos', function () {
    return view('terminos');
})->name('terminos');
