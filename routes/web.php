<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Auth;

Route::get('/', [PageController::class,'index'])->name('gm.index');

Route::get('/blog', [PageController::class,'blog'])->name('gm.blog');

Route::get('/contacts', [PageController::class,'contacts'])->name('gm.contacts');

Route::get('/login', [PageController::class,'login'])->name('login');

Route::get('/register', [PageController::class,'register'])->name('register');

Route::get('/Sobrenos', [PageController::class,'Sobrenos'])->name('gm.Sobrenos');

Route::get('/clube', [PageController::class,'clube'])->name('gm.clube');

Route::get('/inscricao',[PageController::class,'inscricao'])->name('gm.inscricao');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
