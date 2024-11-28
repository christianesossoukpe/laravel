@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-8">
    <h2 class="text-2xl font-bold mb-6">Connexion</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
            <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded" value="{{ old('email') }}" required autofocus>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
            <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Se connecter</button>
            <a href="{{ route('password.request') }}" class="text-sm text-blue-500">Mot de passe oublié ?</a>
        </div>
    </form>
</div>
@endsection
