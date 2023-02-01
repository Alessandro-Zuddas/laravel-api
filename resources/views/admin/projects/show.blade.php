@extends('layouts.admin')

@section('content')

    <h1 class="mt-2">{{ $project->name }}</h1>

    <h2>Categoria: 
        @if (isset($project->type->name))
            <a href="{{ route("admin.types.show",  $project->type)}}">{{ $project->type->name }}</a>
        @else
            Nessuna categoria
        @endif
    </h2>

    <div class="mt-2">
        @if ($project->technology)
            <h4>Tecnologie:</h4> 
            @foreach ($project->technology as $technology)
            <span class="badge bg-secondary">{{ $technology->name }}</span>   
            @endforeach
        @else
            <h4>Nessuna tecnologia utilizzata.</h4>
        @endif
    </div>

    <ul>
        <li>{{ $project->description }}</li>
        <li>{{ $project->date }}</li>
        <li>{{ $project->slug }}</li>
        @if($project->project_image)
        <li>
            <img class="w-25" src="{{ asset("storage/$project->project_image") }}" alt="{{ $project->name }}">
        </li>
        @endif

        <a href="{{ route("admin.projects.index") }}">Torna alla lista</a>
    </ul>

@endsection