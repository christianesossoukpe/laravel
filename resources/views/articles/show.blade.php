@extends('layouts.app')

@section('content')
    <div class="container ml-[500px] w-[900px] h-10 mt-[200px] mx-auto p-10">
        <div class="bg-orange-300 shadow-md rounded-md overflow-hidden">
        <div class="flex justify-center items-center bg-gray-200 h-48">
    <img src="{{ Storage::url($article->image_path) }}" 
         alt="Image de l'article" 
         class="max-h-full max-w-full">

            </div>

            <div class="p-4">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">{{ $article->title }}</h3>
                <p class="text-gray-600 mb-6">{{ $article->summary }}</p>
                <div class="text-gray-800">{{ $article->content }}</div>

                <div class="mt-6 flex justify-center space-x-4">
                    <a href="{{ route('articles.view', $article->id) }}" 
                       class="inline-block bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
                        Lire le PDF
                    </a>
                </div>

                <div class="mt-6 flex justify-center space-x-4">
                    <a href="{{ route('articles.edit', $article->id) }}" 
                       class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Modifier
                    </a>

                    <button type="button" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600"
                        onclick="confirmDelete({{ $article->id }})">
                        Supprimer
                    </button>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function confirmDelete(articleId) {
            swal({
                title: "Êtes-vous sûr ?",
                text: "Vous allez supprimer cet article !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    document.getElementById('delete-form-' + articleId).submit();
                }
            });
        }
    </script>

    <form id="delete-form-{{ $article->id }}" action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
@endsection