@extends('layout.citanueva')

@section('content')
    <form action="{{route('citas.update',$cita)}}" method="post">
        <fieldset>
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="mascota">Nombre de la mascota</label>
                <input type="text" name="mascota" id="mascota" value="{{$cita->mascota}}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label for="dia">Dia</label>
                <input type="date" class="form-group"
                       name="dia" id="dia" value="{{$cita->dia}}" required >
            </div>
            <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" class="form-group"
                       name="hora" id="hora" value="{{$cita->hora}}">
            </div>
            <button type="submit" class="btn btn-primary">Modificar Cita</button>
        </fieldset>
    </form>








@endsection
