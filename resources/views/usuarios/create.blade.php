@extends('layouts.miapp')

@section('content')
<div class="container">
    <h2>Crear Usuario</h2>
    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre_completo">Nombre Completo:</label>
            <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Crear</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary mt-2">Cancelar</a>
    </form>
</div>
@endsection