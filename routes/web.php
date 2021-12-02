<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;


Route::middleware(['role', 'auth', 'verified'])->group(function () {
    Route::get('/users/{user}/send_reactivate_mail', [UserController::class,'send_reactivate_email'])->name('users.sendActivationEmail');
    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);
    Route::resource('categories',CategoryController::class);
    Route::get('/alterpass',[UserController::class,'editpass'])->name('users.editpass');
    Route::post('/alterpass',[UserController::class,'updatepass'])->name('users.updatepass');
    Route::get('/admin', [HomeController::class, 'index'])->name('admin');
});

Route::get('/', [PageController::class,'index'])->name('gm.index');

Route::get('/blog', [PageController::class,'blog'])->name('gm.blog');

Route::get('/contact', [PageController::class,'contact'])->name('gm.contact');

Route::get('/login', [PageController::class,'login'])->name('login');

Route::get('/register', [PageController::class,'register'])->name('register');

Route::get('/Sobrenos', [PageController::class,'Sobrenos'])->name('gm.Sobrenos');

Route::get('/clube', [PageController::class,'clube'])->name('gm.clube');

Route::get('/inscricao',[PageController::class,'inscricao'])->name('gm.inscricao');

Auth::routes(['verify'=> True]);


Route::get('/inscricao',[PageController::class,'inscricao'])->name('gm.inscricao');
