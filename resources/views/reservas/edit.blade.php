@extends('layouts.app')

@section('content')
    <h1>Editar Reserva</h1>

    <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <input type="number" name="cliente_id" class="form-control" value="{{ $reserva->cliente_id }}" required>
        </div>

        <div class="form-group">
            <label for="servicio_id">Servicio</label>
            <input type="number" name="servicio_id" class="form-control" value="{{ $reserva->servicio_id }}" required>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $reserva->fecha }}" required>
        </div>

        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="time" name="hora" class="form-control" value="{{ $reserva->hora }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Reserva</button>
    </form>
@endsection