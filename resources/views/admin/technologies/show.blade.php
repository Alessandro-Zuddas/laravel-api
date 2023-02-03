@extends('layouts.admin')

@section('content')

    <h1 class="mt-2">{{ $technology->name }}</h1>

    <ul>
        <li>{{ $technology->id }}</li>
        <li>{{ $technology->name }}</li>
        <li>{{ $technology->slug }}</li>

        @forelse ($technology->projects as $project)
            <li>{{ $project->name }}</li>
        @empty
            <li>Nessun progetto associato alla tecnologia!</li>
        @endforelse

        <a href="{{ route("admin.technologies.index") }}">Torna alla lista</a>
    </ul>

@endsection