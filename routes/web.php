<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
Route::get('/', function () {
    return view('welcome');
});


// Route pour afficher tous les articles
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

// Route pour afficher un article spécifique
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

// Route pour afficher le formulaire de création d'article (facultatif)
Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');

// Route pour enregistrer un nouvel article
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

// Route pour afficher le formulaire d'édition d'un article
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

// Route pour mettre à jour un article existant
Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');

// Route pour supprimer un article
Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');

// Routes pour le téléchargement et la lecture du PDF
Route::get('/articles/{id}/download', [ArticleController::class, 'download'])->name('articles.download');
Route::get('/articles/{id}/view', [ArticleController::class, 'view'])->name('articles.view');



// routes d'authentification
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
