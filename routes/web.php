<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class,'index'])->name('gm.index');

Route::get('/blog', [PageController::class,'blog'])->name('gm.blog');

Route::get('/contacts', [PageController::class,'contacts'])->name('gm.contacts');

Route::get('/login', [PageController::class,'login'])->name('gm.login');

Route::get('/registarlogin', [PageController::class,'registarlogin'])->name('gm.registarlogin');

Route::get('/Sobrenos', [PageController::class,'Sobrenos'])->name('gm.Sobrenos');

Route::get('/clube', [PageController::class,'clube'])->name('gm.clube');

Route::get('/inscricao',[PageController::class,'inscricao'])->name('gm.inscricao');
