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
<body class="bg-[url('/public/images/background.png')] bg-cover bg-center">

    <!-- Contenu Principal -->
    <div class="container mx-auto px-4 py-16 min-h-screen flex flex-col justify-center items-center bg-blue-50">
        <!-- Texte d'introduction -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-blue-800 mb-4">Bienvenue sur Articles Home</h1>
            <p class="text-lg text-gray-700">
                Découvrez une collection d'articles prêts à être téléchargés et partagez vos découvertes avec d'autres !
            </p>
        </div>

        <!-- Section Avantages -->
        <div class="p-6 bg-white shadow-lg rounded-lg text-center max-w-md w-full">
            <h3 class="text-2xl font-semibold text-blue-700 mb-4">Publiez et téléchargez des articles facilement</h3>
            <p class="text-gray-600">
                Ajoutez un titre, un contenu riche, des images et des catégories 
                pour mieux organiser vos publications.
            </p>
        </div>

        <!-- Bouton -->
        <a href="/register" 
           class="mt-8 inline-block bg-yellow-500 text-white px-6 py-3 rounded-lg text-lg font-medium 
                  hover:bg-yellow-400 hover:shadow-md transition duration-300">
            Accédez aux articles en vous connectant !
        </a>
    </div>
</body>
</html>
