@extends('layouts.miapp')

@section('content')
<div class="container">
    <div class="row justify-content-around">
        <div class="col-10 border text-center p-2">
        <h2>Detalles del Usuario</h2>
    @if($user)
        <p><strong>ID:</strong> {{ $user->id }}</p>
        @if(isset($user->nombre_completo))
            <p><strong>Nombre:</strong> {{ $user->nombre_completo }}</p>
        @else
            <p><strong>Nombre:</strong> Sin nombre</p>
        @endif
        <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver</a>
    @else
        <p>El usuario no existe.</p>
        <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver</a>
    @endif
        </div>
    </div>
</div>
@endsection
