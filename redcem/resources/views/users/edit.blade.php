@extends('layout')

@section('content')
    <script>

    </script>
    <h1 class="title">Editar Usuarios</h1>
<form method="POST" action="/users/{{$redcem->id}}" style="margin-bottom: 1em;">
    @method('PATCH')
    @csrf
    <div class="field">
        <label class="label" for="name">Name</label>
    <div class="control">
        <input type="text" class="input" name="name" placeholder="Nombre" value="{{$redcem->name}}">
    </div>

    </div>

    <div class="field">
        <label class="label" for="lastName">Apellido</label>
        <div class="control">
            <input type="text" class="input" name="lastName" placeholder="Apellido" value="{{$redcem->lastName}}">
        </div>

    </div>

    <div class="field">
        <label class="label" for="email">Email</label>
        <div class="control">
            <input type="text" class="input" name="email" placeholder="E-mail" value="{{$redcem->email}}">
        </div>

    </div>

    <div class="field">
        <label class="label" for="phoneNumber">Número de Telefono</label>
        <div class="control">
            <input type="text" class="input" name="phoneNumber" placeholder="Número de Telefono" value="{{$redcem->phoneNumber}}">
        </div>

    </div>

    <div class="field">
        <label class="label" for="message">Mensaje</label>
        <div class="control">
            <textarea name="message" class="textarea"> {{$redcem->message}}
           </textarea>

    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Modificar</button>
        </div>
    </div>

    </div>
</form>

    <form method="POST" action="/users/{{$redcem->id}}">
       @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Borrar</button>
            </div>
        </div>
    </form>

    @endsection