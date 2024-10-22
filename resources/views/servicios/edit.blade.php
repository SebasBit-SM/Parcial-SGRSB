@extends('layouts.app')

@section('content')
    <h1>Editar Servicio</h1>

    <form action="{{ route('servicios.update', $servicio->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $servicio->nombre }}" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control">{{ $servicio->descripcion }}</textarea>
        </div>

        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio" class="form-control" value="{{ $servicio->precio }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Servicio</button>
    </form>
@endsection