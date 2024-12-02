@extends('layouts.app')

@section('content')
<div class="container flex ml-52 justify-center items-center min-h-screen bg-[url('/public/images/bl.jpg')] bg-cover bg-center">
    <!-- Conteneur principal -->
    <div class="bg-white  shadow-lg rounded-lg p-8 max-w-3xl w-full">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Profil de {{ Auth::user()->name ?? 'Invité' }}</h1>

        <!-- Conteneur des éléments -->
        <div class="space-y-6">
            <div class="shadow-md rounded-lg p-4">
                <p class="text-lg text-gray-600">
                    <strong class="font-semibold text-gray-800">Nom :</strong> {{ $user->name }}
                </p>
            </div>
            <div class=" shadow-md rounded-lg p-4">
                <p class="text-lg text-gray-600">
                    <strong class="font-semibold text-gray-800">Email :</strong> {{ $user->email }}
                </p>
            </div>
            <div class="shadow-md rounded-lg p-4">
                <p class="text-lg text-gray-600">
                    <strong class="font-semibold text-gray-800">Date d'inscription :</strong> {{ $user->created_at->format('d/m/Y') }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
