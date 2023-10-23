@extends('layouts.plantilla')

@section('content')
    <h1 class="ml-2 ml-md-5 mt-2 font-weight-bold">USUARIOS</h1>

    <a href="{{ route('usuario.create') }}" class="btn btn-success ml-2 ml-md-5 mb-4" style="width: 5rem;">CREAR</a>

    <!-- TABLE -->
    <div class="card ml-2 ml-md-5 mr-2 mr-md-5">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="myTable">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">NOMBRE</th>
                            <th class="text-center">APELLIDOS</th>
                            <th class="text-center">CORREO</th>
                            <th class="text-center">EDAD</th>
                            <th class="text-center">GENERO</th>
                            <th class="text-center">DIRECCION</th>
                            <th class="text-center">ACTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr class="text-center">
                                <td class="text-break" style="width: 6rem;">{{ $usuario->nombres }}</td>
                                <td class="text-break" style="width: 20rem;">{{ $usuario->apellidos }}</td>
                                <td class="text-break" style="width: 20rem;">{{ $usuario->correo }}</td>
                                <td class="text-break" style="width: 20rem;">{{ $usuario->edad }}</td>
                                <td class="text-break" style="width: 20rem;">{{ $usuario->genero }}</td>
                                <td class="text-break" style="width: 20rem;">{{ $usuario->direccion }}</td>
                                <td class="text-break" style="width: 10rem; display: inline-flex;">
                                    <a href="{{ route('usuario.edit', $usuario->id) }}"
                                        class="card-link btn btn-success ml-2"><i class="fas fa-edit"></i></a>

                                    <form action="{{ route('usuario.destroy', $usuario->id) }}" method="POST"
                                        class="eliminar">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="card-link btn btn-danger ml-2"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @if (session('eliminar') == 'ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'Este usuario ha sido eliminado.',
                'success'
            )
        </script>
    @endif

    <script>
        $('.eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Estás seguro de eliminar este usuario?',
                text: "¡Sera eliminado permanentemente!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    /*Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )*/
                    this.submit();
                }
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
