@extends('layouts.app')

@section('content')
<nav class="   p-6" style="background-color: #FFB706;">
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
    <div class="container mx-auto px-4 py-8 flex justify-center items-center">
        
        <div class="bg-white shadow-lg rounded-lg w-full max-w-4xl p-6 sm:p-10">
            <h3 class="text-2xl font-bold text-blue-600 mb-6 text-center">Modifier l'article</h3>

            <!-- Formulaire de modification de l'article -->
            <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Champ pour le titre -->
                <div class="mb-6">
                    <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                    <input type="text" id="title" 
                           name="title" 
                           value="{{ old('title', $article->title) }}"
                           class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('title')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Champ pour le résumé -->
                <div class="mb-6">
                    <label for="summary" class="block text-sm font-medium text-gray-700">Résumé</label>
                    <textarea id="summary" 
                              name="summary" 
                              rows="4"
                              class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('summary', $article->summary) }}</textarea>
                    @error('summary')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Champ pour l'image -->
                <div class="mb-6">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" id="image" name="image" class="block w-full">
                    @if ($article->image_path)
                        <div class="mt-4 text-center">
                            <img src="{{ Storage::url($article->image_path) }}" alt="Image actuelle" class="w-32 h-32 object-cover mx-auto">
                            <p class="text-sm text-gray-600 mt-2">Image actuelle</p>
                        </div>
                    @endif
                    @error('image')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Champ pour le fichier PDF -->
                <div class="mb-6">
                    <label for="file" class="block text-sm font-medium text-gray-700">Fichier PDF</label>
                    <input type="file" id="file" name="file" class="block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @if ($article->file_path)
                        <div class="mt-4">
                            <p class="text-sm text-gray-600">Fichier actuel : 
                                <a href="{{ Storage::url($article->file_path) }}" class="text-blue-600 underline" target="_blank">Télécharger le PDF</a>
                            </p>
                        </div>
                    @endif
                    @error('file')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Bouton de soumission -->
                <div class="mt-6 text-center">
                    <button type="submit" class="bg-yellow-500 text-blue-900 px-6 py-3 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Mettre à jour l'article
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
