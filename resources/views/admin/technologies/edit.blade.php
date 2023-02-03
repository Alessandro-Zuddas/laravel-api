@extends('layouts.admin')

@section('content')

    <h1 class="my-2">Modifica {{ $technology->name }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route("admin.technologies.update", $technology) }}" method="POST">

        @csrf
        @method("PUT")

        <div class="mb-3">
            <label for="name" class="form-label">Nome tecnologia:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci la tecnologia" value="{{ old("name", $technology->name) }}">
        </div>

        <button type="submit" class="btn btn-success">Modifica</button>
        <a href="{{ route("admin.technologies.index") }}" class="btn btn-secondary">Indietro</a>
    </form>
    
@endsection