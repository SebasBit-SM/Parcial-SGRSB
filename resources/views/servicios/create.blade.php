@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Servicio</h1>

    <form action="{{ route('servicios.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Servicio</button>
    </form>
@endsectionl for="descripcion">Descripción