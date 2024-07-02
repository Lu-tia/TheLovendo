<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/' ,[PageController::class, 'homepage'])->name('homepage');

Route::get('/articoli/crea',[ArticleController::class, 'create'])->name('articles.create');
Route::get('/articoli',[ArticleController::class, 'index'])->name('articles.index');

