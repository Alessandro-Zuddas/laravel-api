@extends('layouts.admin')

@section('content')

    <h1 class="my-2">Crea un nuovo tag tecnologia:</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route("admin.technologies.store") }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome tecnologia:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il nome" value="{{ old("name") }}">
        </div>

        <button type="submit" class="btn btn-success">Crea</button>
        <a href="{{ route("admin.technologies.index") }}" class="btn btn-secondary">Indietro</a>
    </form>

@endsection