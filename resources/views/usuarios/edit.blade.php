@extends('layouts.plantilla')

@section('content')
    <h1 class="ml-5 mt-2 mr-5 font-weight-bold">MODIFICAR USUARIO</h1>

    <div class="ml-5 mr-5 mb-5">
        <form action="{{ route('usuario.update', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $usuario->nombres }}" required>
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $usuario->apellidos }}" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" class="form-control" id="correo" name="correo" value="{{ $usuario->correo }}" required>
            </div>

            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" value="{{ $usuario->edad }}" required>
            </div>

            <div class="form-group">
                <label for="genero">Género:</label>
                <select class="form-control" id="genero" name="genero" required>
                    <option value="0" selected>Seleccione una opcion</option>
                    <option value="masculino" {{ $usuario->genero === 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="femenino" {{ $usuario->genero === 'Femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $usuario->direccion }}" required>
            </div>

            <div class="mt-4">
                <button type="submit" id="" name="" class="btn btn-success">Guardar Cambios</button>
                <a class="btn btn-danger ml-1" href="{{ route('usuario.index') }}">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
