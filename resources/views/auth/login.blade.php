@extends('layouts.app')

@section('content')
<div class="max-w-md ml-[700px] p-6 bg-white shadow-lg rounded-lg mt-64 bg-[url('/public/images/imgbi.png')] bg-cover bg-center">
    <h2 class="text-3xl font-semibold text-center text-blue-600 mb-6">Connectez-vous ici</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
            <input type="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
            <input type="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Se connecter</button>
    </form>
    <p class="text-blue-500"> <a href="/register">Ou Inscrivez-vous si vous n'avez pas encore de compte</a> </p>

</div>
@endsection
