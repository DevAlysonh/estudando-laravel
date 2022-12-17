@extends('layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')

<h1>Detalhes do Usuário {{ $user->name }}</h1>

<ul>
    <li>
        {{ $user->name }}
    </li>
    <li>
        {{ $user->email }}
    </li>
</ul>

@endsection


