@extends('layouts.app')
@section('content')
<h1 style="color: aqua">vista Reservas</h1>
<div class="card-body">
    <div class="card-header">
<span style="color: aqua">       
     <a class="btn btn-primary" href="{{ route('reserva.create')}}">nueva reserva</a>
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
        <th>Usuario</th>
        <th>Clase</th>
        <th>fecha</th>
        <th>comienza</th>
        <th>termina</th>
        <th>Accion</th>
    </tr>
    @foreach ($users as $user)

    
    <tr>
        <td>
        {{ $user->id_reserva }}
        </td>
        <td>
        {{ $user->name }}
        </td>
        <td>
        {{ $user->nombreClase }}
        @if(!empty(asset('storage') . '/' . $user->imagen))
        <img src="{{ asset('storage') . '/' . $user->imagen }}"  width="20%">
        @endif  
        </td>
        <td>
            {{ date('d/m/Y',strtotime($user->fecha))}}
        </td>
       
        <td>
            {{ date('g:i A',strtotime($user->comienza))}}
        </td>
      
        <td>
            {{ date('g:i A',strtotime($user->termina ))}}
        </td>
        <td>
        <a href="{{ route('reserva.edit', $user->id_reserva) }}"><button class="btn btn-warning">Editar</button></a>
       <div class="mt-2">

        <button type="submit" form="delete_{{ $user->id_reserva }}"
            onclick="return confirm('¿estas seguro de eliminar el registro?')" 
            class="btn btn-danger " >
            <form action="{{ route('reserva.destroy', $user->id_reserva) }}"
                id="delete_{{ $user->id_reserva }}" method="post" enctype="multipart/form-data"
                hidden>
                @csrf
                @method('delete')
            </form>
            Eliminar
        </button>
        
       </div>
    </td>
        
    </tr>
    @endforeach
    </table>
</div>
 
@endsection
