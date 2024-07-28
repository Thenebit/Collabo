<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/publish', [HomeController::class, 'publish'])->name('publish');

Route::post('/store', [HomeController::class, 'store'])->name('store');

Route::get('comment/{id}', [HomeController::class, 'comment'])->name('comment');
