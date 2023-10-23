@extends('layouts.plantilla')

@section('content')
    <h1 class="ml-5 mt-2 mr-5 font-weight-bold">CREAR USUARIO</h1>

    <div class="ml-5 mr-5 mb-5">
        <form action="{{ route('usuario.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="Nombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo Electronico" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="int" class="form-control" id="edad" name="edad" placeholder="Edad" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="genero">Género:</label>
                <select class="form-control" id="genero" name="genero" required>
                    <option value="0" selected>Seleccione una opcion</option>
                    <option value="masculino" {{ old('genero') == 'masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="femenino" {{ old('genero') == 'femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion" aria-describedby="emailHelp" required>
            </div>

            <div class="mt-4">
                <!-- Save -->
                <button type="submit" id="" name="" class="btn btn-success">Guardar</button>

                <!-- Cancel -->
                <a class="btn btn-danger ml-1" href="{{ route('usuario.index') }}">Cancelar</a>
            </div>
        </form>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
