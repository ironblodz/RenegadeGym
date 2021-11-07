<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class,'master'])->name('master');

Route::get('/blog', [PageController::class,'blog'])->name('gm.blog');

Route::get('/contacts', [PageController::class,'contacts'])->name('gm.contacts');

Route::get('/login', [PageController::class,'login'])->name('gm.login');

Route::get('/registarlogin', function (){
    return view('gm.registarlogin');
})->name('gm.registarlogin');

