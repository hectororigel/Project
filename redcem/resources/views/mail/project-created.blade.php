@component('mail::message')
# Datos de Usuario: {{$redcem->name}}


{{$redcem->message}}
<br>
{{$redcem->selection}}

@component('mail::button', ['url' => url('/redcem/' . $redcem->id)])
Button text



Thanks,<br>
{{ config('app.name') }}
@endcomponent
