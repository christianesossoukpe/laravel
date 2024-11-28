@extends('layouts.app')

@section('content')
<!-- Contenu Principal -->
<div class="container ml-60 mx-auto p-10">
    <h2 class="text-3xl font-semibold mb-6 text-center text-blue-600">Liste des Articles</h2>
    
    <!-- Grille des Articles -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($articles as $article)
            <div class="bg-white shadow-md rounded-md overflow-hidden">
                <img src="{{ Storage::url($article->image_path) }}" alt="Image de l'article" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $article->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($article->summary, 100) }}</p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('articles.show', $article->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Voir l'article</a>
                        <a href="{{ Storage::url($article->image_path) }}" download class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-green-700">Télécharger l'image</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
<!-- Pagination -->
<div class="flex justify-center mt-6">
    {{ $articles->links('pagination::tailwind') }}
</div>
<!-- {
    link: 'bg-white px-3 py-1 border-r border-t border-b text-black no-underline',
    linkActive: 'bg-yellow-lighter border-yellow font-bold',
    linkSecond: 'rounded-l border-l',
    linkBeforeLast: 'rounded-r',
    linkFirst: {
        '@apply mr-3 pl-5 border': {},
        'border-top-left-radius': '999px',
    },
    linkLast: {
        '@apply ml-3 pr-5 border': {},
        'border-top-right-radius': '999px',
    },
} -->
</div>
@endsection
