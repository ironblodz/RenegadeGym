<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class,'master'])->name('master');

Route::get('/blog', [PageController::class,'blog'])->name('gm.blog');

Route::get('/contacts', [PageController::class,'contacts'])->name('gm.contacts');

Route::get('/login', [PageController::class,'login'])->name('gm.login');

Route::get('/registarlogin', [PageController::class,'registarlogin'])->name('gm.registarlogin');

Route::get('/aboutus', [PageController::class,'aboutus'])->name('gm.aboutus');

Route::get('/index', [PageController::class,'index'])->name('gm.index');

