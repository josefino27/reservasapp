@extends('layouts.app')
@section('content')
<h1 style="color: aqua">vista clases</h1>
<div class="card-body">
    <div class="card-header">
<span style="color: aqua">       
     <a class="btn btn-primary" href="{{ route('clase.create')}}">crear nueva clase</a>
</span>
    </div>
    <table class="table table-dark table-striped">

    <thead>
        
        @if(Session('success'))
        <div class="alert alert-success alert-block">
                <strong >{{ Session('success') }}</strong>
        </div>
        @endif
    </thead>
    <tr>
        <th>Id</th>
        <th>Clase</th>
        <th>cupo</th>
        <th>fecha</th>
        <th>comienza</th>
        <th>termina</th>
        <th>descripcion</th>
        <th>imagen</th>
        <th>accion</th>
    </tr>
    @foreach ($clases as $clase)
    <tr>
        <td>
        {{ $clase->id_clase }}
        </td>
        <td>
        {{ $clase->nombreClase }}
        </td>
        <td>
        {{ $clase->cupo }}
        </td>
        <td>
        {{ $clase->fecha }}
        </td>
        <td>
        {{ $clase->comienza }}
        </td>
        <td>
        {{ $clase->termina }}
        </td>
        <td>
        {{ $clase->descripcion }}
        </td>
        <td>
        @if(!empty(asset('storage') . '/' . $clase->imagen))
        <img src="{{ asset('storage') . '/' . $clase->imagen }}"  width="50%">
       
        @endif  
        </td>
        <td>
            <a href="{{ route('clase.edit',$clase->id_clase) }}" class="btn btn-warning">Editar</a>
            <button type="submit" form="delete_{{ $clase->id_clase }}"
                onclick="return confirm('¿estas seguro de eliminar el registro?')" 
                class="btn btn-danger " >
                <form action="{{ route('clase.update', $clase->id_clase) }}"
                    id="delete_{{ $clase->id_clase }}" method="post" enctype="multipart/form-data"
                    hidden>
                    @csrf
                    @method('delete')
                </form>
                Eliminar
            </button>
        </td>
    </tr>
    @endforeach
    </table>
</div>
 
@endsection
