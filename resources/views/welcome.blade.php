<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenue - Articles à Télécharger</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navigation -->
    <nav class="bg-yellow-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-lg font-bold">Articles Home</a>
            <div>
                <a href="/" class="text-white mx-4 hover:underline">Accueil</a>
                <a href="/articles" class="text-white mx-4 hover:underline">Liste des Articles</a>
            </div>
        </div>
    </nav>

    <!-- Contenu Principal -->
    <div class="container mx-auto mt-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-black-700 mb-4">Bienvenue sur Articles Home</h1>
            <p class="text-gray-700 text-lg">
                Découvrez une collection d'articles prêts à être téléchargés et partagez vos découvertes avec d'autres !
            </p>
            <a href="/articles" class="mt-6 inline-block bg-orange-400 text-black px-6 py-3 rounded-lg hover:bg-blue-800">
                Explorer les Articles
            </a>
        </div>

        <h1 class="text-4xl font-bold text-black-700 mb-4">Ce que nous vous offrons</h1>
        <!-- Section Avantages -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Téléchargement Facile</h3>
                <p class="text-gray-600">Téléchargez des articles en un seul clic avec des formats compatibles.</p>
            </div>
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Interface Conviviale</h3>
                <p class="text-gray-600">Naviguez facilement à travers une interface claire et intuitive.</p>
            </div>
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Partage Simplifié</h3>
                <p class="text-gray-600">Partagez vos articles préférés avec d'autres utilisateurs.</p>
            </div>
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Partage Simplifié</h3>
                <p class="text-gray-600">Partagez vos articles préférés avec d'autres utilisateurs.</p>
            </div>
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Partage Simplifié</h3>
                <p class="text-gray-600">Partagez vos articles préférés avec d'autres utilisateurs.</p>
            </div>
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Partage Simplifié</h3>
                <p class="text-gray-600">Partagez vos articles préférés avec d'autres utilisateurs.</p>
            </div>
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Partage Simplifié</h3>
                <p class="text-gray-600">Partagez vos articles préférés avec d'autres utilisateurs.</p>
            </div>
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Partage Simplifié</h3>
                <p class="text-gray-600">Partagez vos articles préférés avec d'autres utilisateurs.</p>
            </div>
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Partage Simplifié</h3>
                <p class="text-gray-600">Partagez vos articles préférés avec d'autres utilisateurs.</p>
            </div>
         
          
        </div>
    </div>
    <!-- <div class="text-3xl ml-52 font-semibold text-gray-800 mb-2">
        Soyez informés des nouveautés autour de vous!!!
    </div> -->

  
</body>
</html>
