@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header d-inline-flex">
            <h5>Editar Clase</h5>
            <a href="{{ route('clase') }}" class="btn btn-primary ms-auto">
                <i class="fas fa-arrow-left"></i>
                Volver
            </a>
        </div>

        <div class="card-body">
            <form action="{{ route('clase.update', $clase->id_clase) }}" method="POST" enctype="multipart/form-data"
                id="editar" name="editar">
                @method('put')
                @include('clases.form')
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