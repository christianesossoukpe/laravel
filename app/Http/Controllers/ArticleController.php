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
        $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:pdf|max:10048', 
        ]);

        // Sauvegarder le fichier PDF dans le dossier 'public/articles'
        $filePath = $request->file('file')->store('public/articles');
        
        // Création de l'article dans la base de données
        Article::create([
            'title' => $request->title,
            'image_path' => $filePath, 
            'summary' => $request->summary ?? 'No summary provided',
            'content' => $request->content ?? 'No content provided',
        ]);

        return redirect()->route('articles.index')->with('success', 'Article uploaded successfully.');
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

    // Mettre à jour un article existant
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);  // Trouver l'article à mettre à jour
        
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',  // 2MB max image size
            'file' => 'nullable|mimes:pdf|max:2048',  // Validation pour le fichier PDF (optionnel)
        ]);

        // Si un fichier est téléchargé, le sauvegarder
        if ($request->hasFile('file')) {
            // Supprimer l'ancien fichier
            Storage::delete($article->image_path);

            // Sauvegarder le nouveau fichier
            $filePath = $request->file('file')->store('public/articles');
            $article->image_path = $filePath;  // Mettre à jour le chemin du fichier
        }

        // Mettre à jour les autres champs de l'article
        $article->update([
            'title' => $request->title,
            'summary' => $request->summary ?? $article->summary,  // Utiliser la valeur existante si non fournie
            'content' => $request->content ?? $article->content,  // Utiliser la valeur existante si non fournie
        ]);

        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }

    // Supprimer un article existant
    public function destroy($id)
    {
        $article = Article::findOrFail($id);  // Trouver l'article à supprimer

        // Supprimer le fichier lié à l'article
        Storage::delete($article->image_path);

        // Supprimer l'article de la base de données
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}
