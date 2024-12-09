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
<body class="bg-[url('/public/images/.png')] bg-cover bg-center">
  

    <!-- Contenu Principal -->
    <div class="container mx-auto mt-52">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-black-700 mb-4">Bienvenue sur Articles Home</h1>
            <p class="text-gray-700 text-lg">
                Découvrez une collection d'articles prêts à être téléchargés et partagez vos découvertes avec d'autres !
            </p>
           
            <a href="/register" class="mt-6 inline-block bg-blue-500 text-black px-4 py-3 rounded-lg hover:bg-gray-300">
        Inscrivez-vous pour accedez à l'interface des Articles!
            </a>
        </div>

        <!-- Section Avantages -->
        <div class="text-center">
        <h1 class="text-xl mt-6 font-bold text-black-700 mb-4">Fonctionnalités</h1>
        </div>

            <div class="p-4 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Publiez  et telechargez des articles facilement.</h3>
                <p class="text-gray-600"> Ajoutez un titre, un contenu riche, des images et des catégories </p>
                <p> pour mieux organiser vos publications.</p>
            </div>
            </div>
   </body>
</html>
