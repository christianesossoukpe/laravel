@extends('layouts.app')

@section('content')
<h1>Liste des utilisateurs</h1>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="#">Supprimer</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
