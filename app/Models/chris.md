php artisan tinker
\App\Models\Article::factory(10)->create();
@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen ">
    <div class="bg-white p-8 rounded-lg shadow-lg ml-80 w-150">
        <h2 class="text-3xl font-semibold text-center text-blue-600 mb-6">Ajout d'article</h2>
        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Title Field -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium">Title</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="title" name="title" required>
            </div>

            <!-- Resumé Field -->
            <div class="mb-4">
                <label for="summary" class="block text-gray-700 font-medium">Resumé</label>
                <textarea class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="resume" name="resume" rows="3" required></textarea>
            </div>

            <!-- Content Field -->
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-medium">Contenu</label>
                <textarea class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="content" name="content" rows="5" required></textarea>
            </div>

            <!-- PDF Upload Field -->
            <div class="mb-4">
                <label for="file" class="block text-gray-700 font-medium">PDF File</label>
                <input type="file" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="file" name="file" accept="application/pdf" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
                Soumettre
            </button>
        </form>
    </div>
</div>
@endsection
