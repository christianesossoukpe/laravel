<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Application</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[url('/public/images/img.jpg')] bg-cover bg-center">
@if (session('success') || session('error'))
<div id="messageModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">
            {{ session('success') ? 'Succès' : 'Erreur' }}
        </h3>
        <p class="text-gray-600">{{ session('success') ?? session('error') }}</p>
        <button onclick="closeModal()" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            OK
        </button>
    </div>
</div>
@endif

<div class="container mt-4  bg-opacity-80 p-6 rounded-lg shadow-lg">
    @yield('content')
</div>
<script>
    function closeModal() {
        document.getElementById('messageModal').style.display = 'none';
    }
</script>

</body>
</html>
