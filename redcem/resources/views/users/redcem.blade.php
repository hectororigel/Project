@extends('layout')
@section('content')

    <h1 class="title">Users</h1>
    <ul>
@foreach($redcem as $redcem)

    <li>
        <a href="/users/{{ $redcem->id }}">
        {{$redcem->name}}
        </a>
    </li>

@endforeach
</ul>
@endsection