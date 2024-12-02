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


// Enregistrer un nouvel article
public function store(Request $request)
{
    // Validation des données
    $request->validate([
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'file' => 'required|mimes:pdf|max:2048',
        'summary' => 'nullable|string', // Validation du résumé
    ]); 

    // Sauvegarde de l'image dans le répertoire 'public/images'
    $imagePath = $request->file('image')->store('images', 'public'); 
    // Sauvegarde du fichier PDF dans le répertoire 'public/articles'
    $filePath = $request->file('file')->store('articles', 'public'); 

    // Vérifiez si l'utilisateur est connecté
    $userId = Auth::id();
    if (!$userId) {
        // Gérer le cas où l'utilisateur n'est pas connecté
        return redirect()->route('articles.index')->with('error', 'Vous devez être connecté pour ajouter un article.');
    }

    // Création de l'article avec les chemins des fichiers
    Article::create([
        'title' => $request->title,
        'image_path' => $imagePath,
        'summary' => $request->summary ?? 'No summary provided',
        'file_path' => $filePath,
        'user_id' => $userId, // Associe l'article à l'utilisateur connecté
    ]);

    // Redirection vers le tableau de bord avec le contrôleur
    return redirect()->action([DashboardController::class, 'index'])->with('success', 'Article ajouté avec succès.');
}
}




