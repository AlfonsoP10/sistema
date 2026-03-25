@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Editar Usuario</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
            @csrf
            @method('PUT') {{-- ¡Esto es obligatorio para actualizar! --}}
            
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $usuario->nombre }}" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $usuario->email }}" required>
            </div>
            
            <button type="submit" class="btn btn-warning">Actualizar</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection