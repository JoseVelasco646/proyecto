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
                <input type="time" name="hora" id="hora" required>
            </div>
            <div class="form-group">
                <label for="opciones">Servicio</label>
                <select name="opciones" required>
                    <option value="">Seleccionar</option>
                    <option value="veterinaria">Veterinaria</option>
                    <option value="estetica">Estetica</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear Cita</button>

        </fieldset>
    </form>








@endsection
