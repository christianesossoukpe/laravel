@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-10">
        <div class="bg-white shadow-md rounded-md overflow-hidden">

            <!-- Section pour afficher l'image en arrière-plan -->
            <div class="h-64 bg-cover bg-center" style="background-image: url('{{ Storage::url($article->image_path) }}');">
                <!-- Autres contenus, comme le titre et le résumé de l'article -->
            </div>

            <div class="p-4">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">{{ $article->title }}</h3>
                <p class="text-gray-600 mb-6">{{ $article->summary }}</p>
                <div class="text-gray-800">{{ $article->content }}</div>

                <!-- Liens pour lire et télécharger le PDF -->
                <div class="mt-6">
                    <a href="{{ route('articles.view', $article->id) }}" 
                       class="inline-block bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
                        Lire le PDF
                    </a>
<!-- 
                    <a href="{{ route('articles.download', $article->id) }}" 
                       class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-green-700 ml-4">
                        Télécharger le PDF
                    </a> -->
                </div>

                <!-- Boutons pour modifier et supprimer -->
                <div class="mt-6 flex space-x-4">
                    <a href="{{ route('articles.edit', $article->id) }}" 
                       class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Modifier l'article
                    </a>

                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">
                            Supprimer l'article
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
