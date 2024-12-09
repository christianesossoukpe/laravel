@extends('layouts.app')

@section('content')
<!-- Contenu Principal -->
<div class="container"> 
<nav class="bg-yellow-600 p-6">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-white text-lg font-bold">Mon Application</a>
        <div>
            <a href="/" class="text-white mx-4">Accueil</a>
            <a href="/articles" class="text-white mx-4">Articles</a>
            <a href="/dashboard" class="text-white mx-4 ">Mon espace</a>
            <a href="{{ route('articles.create') }}" class="text-white mx-4">Créer</a>
        </div>
    </div>
</nav>
    <h2 class="text-3xl font-semibold mb-6 text-center text-blue-600">Liste des Articles</h2>
    
    <!-- Grille des Articles -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($articles as $article)
            <div class="bg-white shadow-md rounded-md overflow-hidden">
            <div class="flex justify-center items-center bg-gray-200 h-48">
    <img src="{{ Storage::url($article->image_path) }}" 
         alt="Image de l'article" 
         class="h-full w-full">
</div>
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $article->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($article->summary, 100) }}</p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('articles.show', $article->id) }}" class="bg-yellow-500  text-white px-4 py-2 rounded-lg hover:bg-blue-700">Voir l'article</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    <!-- Pagination -->
    <div class="flex justify-center mt-6">
        <div class="pagination flex items-center space-x-2">
            {{ $articles->links('pagination::tailwind') }}
        </div>
    </div>
</div>
@endsection
