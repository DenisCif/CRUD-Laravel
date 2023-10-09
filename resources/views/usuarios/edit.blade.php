@extends('layouts.miapp')

@section('content')
<div class="container">
    <h2>Editar Usuario</h2>
    <form method="POST" action="{{ route('usuarios.update', $user->id) }}">
    <!-- <form method="POST" action="{{ route('usuarios.store') }}"> -->
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre_completo">Nombre completo:</label>
            <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" value="{{ $user->nombre_completo }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Guardar Cambios</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary mt-2">Cancelar</a>
    </form>
</div>
@endsection
