<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');


Route::get('/articoli', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articoli/{id}', [ArticleController::class, 'index'])->name('articles.category');
Route::get('/articoli/dettagli-articolo/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::middleware(['auth'])->group(function () {

    Route::get('/articoli/crea', [ArticleController::class, 'create'])->name('articles.create');
});
