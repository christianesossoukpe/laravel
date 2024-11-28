@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-8">
    <h2 class="text-2xl font-bold mb-6">Inscription</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nom complet</label>
            <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded" value="{{ old('name') }}" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
            <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded" value="{{ old('email') }}" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
            <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2 rounded w-full">S'inscrire</button>
    </form>
</div>
@endsection
