@csrf
<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label for="">Nombre de la Clase</label>
            <input type="text" class="form-control" name="nombreClase" value="{{(isset($clase))?$clase->nombreClase:old('nombreClase')}}" required>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <label for="">cupos Disponibles</label>
            <input type="text" class="form-control" name="cupo" value="{{(isset($clase))?$clase->cupo:old('cupo')}}" required>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <label for="">Fecha</label>
            <input type="date" class="form-control" name="fecha" value="{{(isset($clase))?$clase->fecha:old('fecha')}}" required>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <label for="">comienza</label>
            <input type="time" class="form-control" name="comienza" value="{{(isset($clase))?$clase->comienza:old('comienza')}}" required>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <label for="">termina</label>
            <input type="time" class="form-control" name="termina" value="{{(isset($clase))?$clase->termina:old('termina')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="{{(isset($clase))?$clase->descripcion:old('descripcion')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">imagen</label>    
            @if(isset($clase))
            <td>
                <img src="{{ asset('storage').'/'.$clase->imagen }}" width="200">
                <input type="file" accept="image/*" class="form-control" name="imagen" >
               
            </td> 
                <div class="col-12">
                    <div class="form-group">
                        <td>
                            <span>
                                <h3>Descripcion: </h3>
                                {{$clase->descripcion}}
                            </span>
                    </td>
                </div>  
            @else
            <input type="file" accept="image/*" class="form-control" name="imagen" required>
            @endif
        </div>
    </div>
        </div>
    </div>           
    </div>
<div>
