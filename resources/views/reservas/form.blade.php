@csrf
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="">Nombre del usuario</label>
            <select id="id_usuario" name="id_usuario" class="form-control">
            @foreach($users as $user)
            <option value="{{$user->id}}"> {{ $user->name }} </option>
            @endforeach
            </select>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="">Nombre de la clase</label>
            <select id="id_clase" name="id_clase" class="form-control">
            @foreach($clases as $clase)
            <option value="{{$clase->id_clase}}">
            Clase: {{ $clase->nombreClase }} | Fecha: {{ $clase->fecha}} | Inicio:{{ $clase->comienza}} | Finaliza:{{ $clase->termina}} </option>
            @endforeach
            </select>
        </div>
    </div>
    
<div>
