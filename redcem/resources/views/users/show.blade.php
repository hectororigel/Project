@extends('layout')

@section('content')

    <h2 class="title">Nombre</h2>
    <div class="content">{{$redcem->name}}</div>

    <h2 class="title">Apellido</h2>
    <div class="content">{{$redcem->lastName}}</div>

    <h2 class="title">Email</h2>
    <div class="content">{{$redcem->email}}</div>

    <h2 class="title">Número de Telefono</h2>
    <div class="content">{{$redcem->phoneNumber}}</div>

    <h2 class="title">Mensaje</h2>
    <div class="content">{{$redcem->message}}</div>

    <a href="/users/{{$redcem->id}}/edit">
    <button class="button is-link">Editar</button>
    </a>
    @endsection