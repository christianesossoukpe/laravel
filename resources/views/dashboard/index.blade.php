<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-100">

    <!-- Menu latéral -->
    <div class="sidebar w-64 bg-white shadow-md h-screen">
        <h2 class="text-center  bg-slate-400 text-2xl font-bold py-4">Menu</h2>
        <ul class="flex flex-col">
            <li class="nav-item">
          
                <a class="nav-link block py-2 px-4 mt-8
                 bg-orange-100  hover:bg-gray-200" 
                 href="{{ route('dashboard') }}">Espace personnel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link block py-2 px-4 mt-8
                 bg-blue-600   hover:bg-gray-200"
                  href="{{ route('articles.index') }}">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link block py-2 px-4 mt-8
                 bg-orange-100 hover:bg-gray-200"
                  href="{{ route('articles.create') }}">Créer un nouvel article</a>
            </li>
            <li class="nav-item">
                 @if(Auth::check())
    <a href="{{ route('profile') }}" class="nav-link block py-2 px-4 mt-8
    bg-blue-600   hover:bg-gray-200">Mon Profil</a>
@endif

            </li>
            <li class="nav-item">

</li>
        </ul>
    </div>


   

    <div class="content flex-grow p-6">
        <!-- Barre de navigation -->
        <nav class="flex items-center justify-between bg-yellow-600  shadow-md p-4">
        <span class="text-2xl font-bold text-black-700 mb-4">
                Bienvenu sur votre espace personnel, {{ Auth::user()->name ?? 'Invité' }}
            </span>            <div class="flex space-x-4">
            
                <!-- <a class="nav-link block py-2 px-4  bg-yellow-600  hover:bg-gray-200" href="#">Notifications</a> -->
                <!-- <a class="nav-link block py-2 px-4  bg-yellow-600  hover:bg-gray-200" href="#">Messages</a> -->
                <form action="{{ route('logout') }}" method="POST" >
        @csrf
        <button type="submit" class="nav-link block py-2 px-4  bg-yellow-600  hover:bg-gray-200">Déconnexion</button>
    </form>
            </div>
                    </nav>
                                        <div class="mt-6">
        <h3 class="text-xl font-bold">Mes Articles</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($articles as $article)
                <li class="bg-white shadow-md p-4 mb-2">
                <div class="flex justify-center items-center bg-gray-200 h-48">
    <img src="{{ Storage::url($article->image_path) }}" 
         alt="Image de l'article" 
         class="h-full w-full">
</div>
                    <h4 class="font-semibold">{{ $article->title }}</h4>
                    <p class="text-gray-600 mb-4">{{ Str::limit($article->summary, 100) }}</p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('articles.show', $article->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Voir l'article</a>
                    </div>
                </li>
            @endforeach
            </div>
            </div>
    
</div> 
    </div>
  
    
</body>
</html>