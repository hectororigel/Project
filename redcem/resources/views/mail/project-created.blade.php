@component('mail::message')
# Datos de Usuario: {{$redcem->name}}


{{$redcem->message}}

@component('mail::button', ['url' => url('/redcem/' . $redcem->id)])
Button text
@endcomponent

    @extends('users.create')

    @section('test')
@parent
    @endsection


Thanks,<br>
{{ config('app.name') }}
@endcomponent
