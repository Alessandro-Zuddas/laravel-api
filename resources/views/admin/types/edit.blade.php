@extends('layouts.admin')

@section('content')

    <h1 class="my-2">Modifica {{ $type->name }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route("admin.types.update", $type) }}" method="POST">

        @csrf
        @method("PUT")

        <div class="mb-3">
            <label for="name" class="form-label">Nome tipologia:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il tipo" value="{{ old("name", $type->name) }}">
        </div>

        <button type="submit" class="btn btn-success">Modifica</button>
        <a href="{{ route("admin.types.index") }}" class="btn btn-secondary">Indietro</a>
    </form>
    
@endsection