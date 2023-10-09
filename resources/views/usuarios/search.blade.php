@extends('layouts.miapp')

@section('content')
<div class="container">
    <h3 class="mt-2 alert alert-info text-center">Resultados de la Búsqueda de Usuarios</h3>
    
    <form class="d-flex" role="search" method="GET" action="{{ route('usuarios.search') }}">
        <input class="form-control me-2" id="search" name="search" type="search" placeholder="Buscar por nombre" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->nombre_completo }}</td>
                    <td>
                        <a href="{{ route('usuarios.show', $user->id) }}" class="btn btn-primary">Ver Detalles</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection
