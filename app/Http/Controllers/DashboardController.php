<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    // {
    //     return view('dashboard.index'); 
    // }
    {
        // Récupérer les articles de l'utilisateur connecté
        $articles = Article::where('user_id', Auth::id())->get();
        return view('dashboard.index', compact('articles'));
    }
}




