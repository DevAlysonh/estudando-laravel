@extends('layouts.app')

@section('title', 'Lista de Usuários')

@section('content')

<h1>Listagem de Usuários</h1>

<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }} -
            {{ $user->email }}
            | <a href="{{ route('users.show', $user->id)}}">Detalhes</a>
        </li>    
    @endforeach    
</ul>

@endsection

