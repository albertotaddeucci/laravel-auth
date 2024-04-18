@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Ciao {{$user->name}}, questa è la tua pagina da amministratore</h1>

    <a class="d-block mt-5" href="{{route('admin.projects.index')}}">Lista dei progetti</a>
</div>
@endsection