<?php

use App\Http\Controllers\{ArticleController, PageController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('articles', ArticleController::class);

Route::get('/about', [PageController::class, 'about'])->name('about');
