@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <h5>Editar Reserva</h5>
            <a href="{{ route('reserva') }}" class="btn btn-primary ms-auto">
                <i class="fas fa-arrow-left"></i>
                Volver
            </a>
        </div>

        <div class="card-body">
            <form action="{{ route('reserva.update', $reserva->id_reserva) }}" method="POST" enctype="multipart/form-data"
                id="editar" name="editar">
                @method('put')
                @include('reservas.form')
            </form>
        </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" form="editar">
                <i class="fas fa-plus"></i> Editar
            </button>
        </div>
    </div>
@endsection