@extends('layouts.app')

@section('content')
    <h1>Crear Nueva Reserva</h1>

    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <input type="number" name="cliente_id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="servicio_id">Servicio</label>
            <input type="number" name="servicio_id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="time" name="hora" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Reserva</button>
    </form>
@endsection
