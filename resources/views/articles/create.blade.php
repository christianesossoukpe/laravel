@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-16 flex justify-center items-center">
    <div class="bg-blue-50 shadow-lg rounded-lg overflow-hidden w-full max-w-4xl p-6 sm:p-10">
        <h2 class="text-3xl font-semibold text-center text-blue-600 mb-8">Ajouter un article</h2>

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Champ Titre -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                <input type="text" id="title" name="title" 
                       class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                       required 
                       value="{{ old('title') }}">
                @error('title')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Champ Résumé -->
            <div>
                <label for="summary" class="block text-sm font-medium text-gray-700">Résumé</label>
                <textarea id="summary" name="summary" rows="3" 
                          class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('summary') }}</textarea>
                @error('summary')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Champ Image -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image" accept="image/*" 
                       class="w-full p-3 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-blue-500" 
                       required>
                @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Champ PDF -->
            <div>
                <label for="file" class="block text-sm font-medium text-gray-700">Fichier PDF</label>
                <input type="file" id="file" name="file" accept="application/pdf" 
                       class="w-full p-3 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-blue-500" 
                       required>
                @error('file')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Bouton de Soumission -->
            <div class="text-center">
                <button type="submit" 
                        class="bg-yellow-500 text-blue-900 px-6 py-3 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Soumettre
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
