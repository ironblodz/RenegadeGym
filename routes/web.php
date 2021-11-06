<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
})->name('master');;

Route::get('/blog', function () {
    return view('gm.blog');
})->name('gm.blog');

Route::get('/contacts', function () {
    return view('gm.contacts');
})->name('gm.contacts');

Route::get('/login', function (){
    return view('gm.login');
})->name('gm.login');

Route::get('/registarlogin', function (){
    return view('gm.registarlogin');
})->name('gm.registarlogin');

