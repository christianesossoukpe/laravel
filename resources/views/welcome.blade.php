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
<body class="bg-[url('/public/images/imgbi.png')] bg-cover bg-center">
  

    <!-- Contenu Principal -->
    <div class="container mx-auto mt-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-black-700 mb-4">Bienvenue sur Articles Home</h1>
            <p class="text-gray-700 text-lg">
                Découvrez une collection d'articles prêts à être téléchargés et partagez vos découvertes avec d'autres !
            </p>
           
            <a href="/register" class="mt-6 inline-block bg-orange-200 text-black px-6 py-3 rounded-lg hover:bg-gray-300">
        Inscrivez-vous pour accedez à l'interface des Articles!
            </a>
        </div>

        <!-- Section Avantages -->
        <div class="text-center">
        <h1 class="text-xl mt-6 font-bold text-black-700 mb-4">Fonctionnalités</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Publiez facilement vos articles grâce à une interface intuitive.</h3>
                <p class="text-gray-600"> Ajoutez un titre, un contenu riche, des images et des catégories pour mieux organiser vos publications.</p>
            </div>
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
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Sécurité Assurée
              </h3>
                <p class="text-gray-600">  "Vos téléchargements sont protégés pour garantir la confidentialité de vos données."</p>
            </div>
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2"> Modifiez, supprimez ou archivez vos articles à tout moment.</h3>
                <p class="text-gray-600">
                Gardez le contrôle total sur votre contenu avec une gestion centralisée et simplifiée.</p>
            </div>
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Organisez vos articles par catégories ou tags pour faciliter la navigation.</h3>
                <p class="text-gray-600">
                 Les visiteurs peuvent rechercher des articles spécifiques grâce à des filtres avancés.</p>
            </div>
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Permettez à vos lecteurs de partager vos articles sur les réseaux sociaux.</h3>
                <p class="text-gray-600">
                Encouragez l'interaction grâce aux commentaires et aux réactions.</p>
            </div>
            <div class="p-8 bg-white shadow-md rounded-md text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Accédez aux données clés : </h3>
                <p class="text-gray-600">
                interactions  pour optimiser votre contenu et répondre aux attentes de vos lecteurs.</p>
            </div>
          </div>
    </div>
   </body>
</html>
