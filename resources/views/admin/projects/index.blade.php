@extends('layouts.app')

@section('content')
<div class="container py-5">
    <ul class="list-group">
        @foreach ($projects as $project)  
        <li class="list-group-item">
            <div class="row">
                <div class="col">{{$project->title}}</div>
                <div class="col text-end"><a href="{{route('admin.projects.show', $project->id)}}">Esplora</a></div>
            </div>
        </li>        
        @endforeach
    </ul>

    <a href="{{route('admin.projects.create')}}" class="btn btn-primary my-5">Aggiungi un progetto</a>
</div>
@endsection