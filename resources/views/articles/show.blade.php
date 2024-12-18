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
    <div class="container ml-[200px] h-[800px] mt-8  w-[1000px] p-10 flex justify-center text-center
     bg-gray-100 bg-cover bg-center">
        <div class="bg-white-200 shadow-md rounded-md overflow-hidden">
        <div class="flex justify-center w-[500px] items-center bg-white h-[400px]">
    <img src="{{ Storage::url($article->image_path) }}" 
         alt="Image de l'article" 
         class="h-full w-full  bg-white  ">

            </div>

            <div class="p-4">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">{{ $article->title }}</h3>
                <p class="text-gray-600 mb-6">{{ $article->summary }}</p>
                <div class="text-gray-800">{{ $article->content }}</div>

                        <div class="mt-32 flex justify-center space-x-4">
                <a href="{{ route('articles.view', $article->id) }}" 
                       class="inline-block bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
                        Lire le PDF
                    </a>
                    <a href="{{ route('articles.edit', $article->id) }}" 
                       class=" text-white px-4 py-2 rounded-md hover:bg-blue-500"  style="background-color: #FFB706;">
                        Modifier
                    </a>

                    <button type="button" class="bg-red-400 text-white px-4 py-2 rounded-md hover:bg-red-500"
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