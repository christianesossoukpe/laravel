@extends('layouts.app')

@section('content')
<div class="container ml-[500px] mt-32 w-[900px] p-10 flex justify-center text-center bg-[url('/public/images/')] bg-cover bg-center">
        <div class="bg-blue-50 shadow-md rounded-md overflow-hidden w-full max-w-2xl">
        <h2 class="text-3xl font-semibold text-center text-blue-600 mb-6">Ajouter d'articles ici</h2>

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title Field -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Titre</label>
                <input type="text" id="title" name="title" class="w-[400px] p-3 border
                      border-gray-300 rounded-md
                       focus:outline-none focus:ring-2 focus:ring-blue-500" required value="{{ old('title') }}">
                @error('title')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Summary Field -->
            <div class="mb-4">
                <label for="summary" class="block text-gray-700 font-medium">Résumé</label>
                <textarea id="summary" name="summary" class="w-[400px] p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3">{{ old('summary') }}</textarea>
                @error('summary')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
    <label for="image" class="block text-gray-700 font-medium">Image</label>
    <input type="file" id="image" name="image" accept="image/*" class="w-[400px] p-3 border
                      border-gray-300 rounded-md
                  bg-white     focus:outline-none focus:ring-2 focus:ring-blue-500" required>
</div>

        

            <!-- PDF Upload Field -->
            <div class="mb-4">
                <label for="file" class="block text-gray-700 font-medium">Fichier PDF</label>
                <input type="file" id="file" name="file" class="w-[400px] p-3 border
                      border-gray-300 rounded-md
                       focus:outline-none focus:ring-2 bg-white   focus:ring-blue-500" accept="application/pdf" required>
                @error('file')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-yellow-900 mb-8  text-white px-6 py-3 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Soumettre
            </button>
        </form>
    </div>
</div>
@endsection
