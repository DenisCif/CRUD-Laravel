@extends('layouts.miapp')

@section('content')
<div class="container">
    <div class="row justify-content-around ">
        <div class="col-10 mt-2 text-center ">
            @if(session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <h2 class="m-2 text-center">Lista de Usuarios</h2>
            <div class="row mb-2">
                <div class="col-12 text-start">
                    <a href="{{ route('usuarios.create') }}" class="btn btn-sm btn-primary  text-start ">Crear Usuario</a>
                </div>
            </div>
            <table class="table border table-hover table-responsive ">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nombre_completo }}</td>
                        <td>
                            <a href="{{ route('usuarios.show', $user->id) }}" class="btn btn-sm btn-info"><i class="bi bi-eye-fill"></i></a>
                            <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-x-square-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection