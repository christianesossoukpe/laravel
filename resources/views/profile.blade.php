@extends('layouts.app')

@section('content')
<div class="container flex justify-center items-center min-h-screen bg-[url('/public/images/background.jpg')] bg-cover bg-center px-4">
    <!-- Conteneur principal -->
    <div class="bg-blue-50 shadow-lg rounded-lg p-8 max-w-3xl w-full">
        <h1 class="text-3xl font-bold text-blue-700 mb-8 text-center">
            Profil de {{ Auth::user()->name ?? 'Invité' }}
        </h1>

        <!-- Conteneur des éléments -->
        <div class="space-y-6">
            <!-- Nom -->
            <div class="shadow-md rounded-lg p-4 bg-yellow-50 border-l-4 border-yellow-400">
                <p class="text-lg text-gray-700">
                    <strong class="font-semibold text-blue-700">Nom :</strong> {{ $user->name }}
                </p>
            </div>

            <!-- Email -->
            <div class="shadow-md rounded-lg p-4 bg-yellow-50 border-l-4 border-yellow-400">
                <p class="text-lg text-gray-700">
                    <strong class="font-semibold text-blue-700">Email :</strong> {{ $user->email }}
                </p>
            </div>

            <!-- Date d'inscription -->
            <div class="shadow-md rounded-lg p-4 bg-yellow-50 border-l-4 border-yellow-400">
                <p class="text-lg text-gray-700">
                    <strong class="font-semibold text-blue-700">Date d'inscription :</strong> {{ $user->created_at->format('d/m/Y') }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
