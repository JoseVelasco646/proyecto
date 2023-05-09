@extends('layout.citanueva')

@section('content')
    <form action="{{route('citas.store')}}" method="post">
        <fieldset>
            @csrf
            <div class="form-group">
                <label for="mascota">Nombre de la mascota</label>
                <input type="text" name="mascota" id="mascota" class="form-control">
            </div>
            <div class="form-group">
                <label for="dia">Dia</label>
                <input type="date" name="dia" id="dia" required>
            </div>
            <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" name="hora" id="hora">
            </div>
            <button type="submit" class="btn btn-primary">Crear Cita</button>
        </fieldset>
    </form>








@endsection
