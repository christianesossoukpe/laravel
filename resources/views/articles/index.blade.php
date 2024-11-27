@extends('layouts.app')

@section('content')
<!-- Contenu Principal -->
<div class="container ml-52 p-10">
    <h2 class="text-3xl font-semibold mb-6 text-center text-blue-600">Liste des Articles</h2>
    
    <!-- Table des Articles -->
    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
        <thead class="bg-blue-100">
            <tr>
                <th class="py-3 px-6 text-left bg-orange-200 text-gray-700">Titre de l'article</th>
                <th class="py-3 px-6 text-left text-gray-700">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-6 text-gray-700">{{ $article->title }}</td>
                <td class="py-3 px-6 flex justify-between">
    <a href="{{ Storage::url($article->image_path) }}" target="_blank" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Voir l'article</a>
    <a href="{{ Storage::url($article->image_path) }}" download class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-green-700 ml-auto">Télécharger</a>
</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    
    <!-- Pagination -->
    <div class="flex justify-center mt-6">
        {{ $articles->links('pagination::tailwind') }}
    </div>
</div>
@endsection
