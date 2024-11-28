@extends('layouts.app')

@section('content')
    <div class="container ml-[500px] w-[900px] p-10 flex justify-center text-center"> <!-- Centrage du conteneur -->
        <div class="bg-white shadow-md rounded-md overflow-hidden w-full max-w-2xl"> <!-- Limitation de la largeur -->
            <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Modifier l'article</h3>
            
            <!-- Formulaire de modification de l'article -->
            <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Champ pour le titre -->
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Titre</label>
                    <input type="text" id="title" 
                    name="title" value="{{ old('title', $article->title) }}"
                     class="w-[400px] p-3 border
                      border-gray-300 rounded-md
                       focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('title')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Champ pour le résumé -->
                <div class="mb-4">
                    <label for="summary" class="block text-gray-700">Résumé</label>
                    <textarea id="summary" name="summary" rows="4" class="w-[400px] p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('summary', $article->summary) }}</textarea>
                    @error('summary')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Champ pour l'image -->
                <div class="mb-4">
                    <label for="image" class="block text-gray-700">Image</label>
                    <input type="file" id="image" name="image" class="w-[400px] p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @if ($article->image_path)
                        <div class="mt-2">
                            <img src="{{ Storage::url($article->image_path) }}" alt="Image actuelle" class="w-32 h-32 object-cover">
                            <p class="text-sm text-gray-600 mt-2">Image actuelle</p>
                        </div>
                    @endif
                    @error('image')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Champ pour le fichier PDF -->
                <div class="mb-4">
                    <label for="file" class="block text-gray-700">Fichier PDF</label>
                    <input type="file" id="file" name="file" class="w-[400px]  p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @if ($article->file_path)
                        <div class="mt-2">
                            <p class="text-sm text-gray-600">Fichier actuel : 
                                <a href="{{ Storage::url($article->file_path) }}" class="text-blue-600" target="_blank">Télécharger le PDF</a>
                            </p>
                        </div>
                    @endif
                    @error('file')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Bouton de soumission -->
                <div class="mt-4 text-center">
                    <button type="submit" class="bg-yellow-900 mb-8  text-white px-6 py-3 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Mettre à jour l'article</button>
                </div>
            </form>
        </div>
    </div>
@endsection
