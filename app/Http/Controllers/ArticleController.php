<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(request()->get('per_page', 10)); // Valeur par défaut : 5
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        $filePath = $request->file('file')->store('public/articles');

        Article::create([
            'title' => $request->title,
            'image_path' => $filePath,
            'summary' => $request->summary ?? 'No summary provided',
            'content' => $request->content ?? 'No content provided',
        ]);

        return redirect()->route('articles.index')->with('success', 'Article uploaded successfully.');
    }
}
