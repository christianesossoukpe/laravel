<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    // Afficher tous les articles avec pagination
    public function index()
    {
        $articles = Article::paginate(6);  // Paginer les articles, 6 par page
        return view('articles.index', compact('articles'));
    }

    // Afficher le formulaire de création d'article
    public function create()
    {
        return view('articles.create');
    }

    // Enregistrer un nouvel article
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',  // Validation de l'image
            'file' => 'required|mimes:pdf|max:2048',  // Validation du fichier PDF
        ]);
        
        // Sauvegarde de l'image dans le répertoire 'public/images'
        $imagePath = $request->file('image')->store('images', 'public'); 
        // Sauvegarde du fichier PDF dans le répertoire 'public/articles'
        $filePath = $request->file('file')->store('articles','public'); 
    
        // Création de l'article avec les chemins des fichiers
        Article::create([
            'title' => $request->title,
            'image_path' => $imagePath,  // Stockage du chemin de l'image
            'summary' => $request->summary ?? 'No summary provided',
            'file_path' => $filePath,    // Stockage du chemin du fichier PDF
        ]);
    
        return redirect()->route('articles.index')->with('success', 'Article ajouté avec succès.');
    }

    // Afficher un article spécifique
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    // Afficher le formulaire d'édition d'article
    public function edit($id)
    {
        $article = Article::findOrFail($id);  // Trouver l'article à éditer
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);  // Trouver l'article à mettre à jour
        
        // Validation des données
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // 2MB max image size
            'file' => 'nullable|mimes:pdf|max:2048',  // Validation pour le fichier PDF (optionnel)
        ]);
    
        // Si un fichier image est téléchargé, le sauvegarder
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image, si elle existe
            if (Storage::exists($article->image_path)) {
                Storage::delete($article->image_path);
            }
            // Sauvegarder la nouvelle image
            $imagePath = $request->file('image')->store('public/images');
            $article->image_path = $imagePath;  // Mettre à jour le chemin de l'image
        }
    
        // Si un fichier PDF est téléchargé, le sauvegarder
        if ($request->hasFile('file')) {
            // Supprimer l'ancien fichier PDF, si il existe
            if (Storage::exists($article->file_path)) {
                Storage::delete($article->file_path);
            }
            // Sauvegarder le nouveau fichier PDF
            $filePath = $request->file('file')->store('public/articles');
            $article->file_path = $filePath;  // Mettre à jour le chemin du fichier PDF
        }
    
        // Mettre à jour les autres champs de l'article
        $article->update([
            'title' => $request->title,
            'summary' => $request->summary ?? $article->summary,  // Utiliser la valeur existante si non fournie
        ]);
    
        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    }
    

    // Supprimer un article existant
    public function destroy($id)
    {
        $article = Article::findOrFail($id);  // Trouver l'article à supprimer

        // Supprimer les fichiers liés à l'article
        Storage::delete($article->image_path);
        Storage::delete($article->file_path);

        // Supprimer l'article de la base de données
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
