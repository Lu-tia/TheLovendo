<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::get('/articoli/search', [ArticleController::class, 'searchArticles'])->name('articles.search');
Route::get('/articoli', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articoli/{id}', [ArticleController::class, 'index'])->name('articles.category');
Route::get('/articoli/dettagli-articolo/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::middleware(['auth'])->group(function () {
    Route::get('/articoli/profilo/crea-articolo', [ArticleController::class, 'create'])->name('articles.create');
    Route::get('/articoli/profilo/crea-articolo/flashpage',[ArticleController::class,'flashpage']);
    Route::get('/profilo-utente/dashboard/{user}',[UserController::class,'dashboard'])->name('users.dashboard');
});

/* SOCALITE */
Route::get('/auth/{social}/redirect',[ProviderController::class, 'redirect'])->name('social.redirect');
Route::get('/auth/{social}/callback',[ProviderController::class, 'callback'])->name('social.callback');

/* RevisorZone */
Route::get('/zona-revisore/articoli',[RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch('accept/{article}',[RevisorController::class, 'accept'])->name('accept');
Route::patch('reject/{article}',[RevisorController::class, 'reject'])->name('reject');
Route::patch('rollback/article',[RevisorController::class, 'rollback'])->name('rollback');

Route::get('/lavora-con-noi', [ContactController::class, 'workWithUs'])->name('workWithUs');
Route::post('/lavora-con-noi', [ContactController::class, 'sendApplication'])->name('applicationMail');