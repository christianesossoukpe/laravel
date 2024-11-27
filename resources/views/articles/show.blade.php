@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-10">
        <div class="bg-white shadow-md rounded-md overflow-hidden">
            <img src="{{ Storage::url($article->image_path) }}" alt="Image de l'article" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">{{ $article->title }}</h3>
                <p class="text-gray-600 mb-6">{{ $article->summary }}</p>
                <div class="text-gray-800">{{ $article->content }}</div>
                
                <!-- Lien pour télécharger le PDF -->
                @if (Storage::exists($article->image_path))  <!-- Vérifie si le fichier existe -->
                    <a href="{{ Storage::url($article->image_path) }}" download class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                        Télécharger le PDF
                    </a>
                @else
                    <p class="mt-4 text-red-500">Le fichier PDF n'est pas disponible.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
