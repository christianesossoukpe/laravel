<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Application</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[url('/public/images/img.jpg')] bg-cover bg-center">
<nav class="bg-yellow-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-white text-lg font-bold">Mon Application</a>
        <div>
            <a href="/" class="text-white mx-4">Accueil</a>
            <a href="/articles" class="text-white mx-4">Articles</a>
        </div>
    </div>
</nav>
<div class="container mt-4  bg-opacity-80 p-6 rounded-lg shadow-lg">
    @yield('content')
</div>
</body>
</html>
