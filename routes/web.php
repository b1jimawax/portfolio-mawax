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
    return view('home/home');
});

Route::get('/projet-portfolio', function () {
    return view('home/projet1');
});

Route::get('/projet-aga', function () {
    return view('home/projet2');
});

Route::get('/projet-gestpoint', function () {
    return view('home/projet3');
});

Route::get('/projet-maquettage', function () {
    return view('home/projet4');
});

Route::get('/projet-prototypage', function () {
    return view('home/projet5');
});

Route::get('/projet-conception', function () {
    return view('home/projet6');
});
