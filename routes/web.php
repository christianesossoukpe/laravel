<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class,
'index'])->name('dashboard')->middleware('auth');

// Route pour afficher tous les articles
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index')->middleware('auth');

// Route pour afficher un article spécifique
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show')->middleware('auth');

// Route pour afficher le formulaire de création d'article (facultatif)
Route::get('/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');

// Route pour enregistrer un nouvel article
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store')->middleware('auth');

// Route pour afficher le formulaire d'édition d'un article
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit')->middleware('auth');

// Route pour mettre à jour un article existant
Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update')->middleware('auth');

// Route pour supprimer un article
Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy')->middleware('auth');

// Routes pour le téléchargement et la lecture du PDF
Route::get('/articles/{id}/download', [ArticleController::class, 'download'])->name('articles.download')->middleware('auth');
Route::get('/articles/{id}/view', [ArticleController::class, 'view'])->name('articles.view')->middleware('auth');




// Routes de connexion
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

 

Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');

