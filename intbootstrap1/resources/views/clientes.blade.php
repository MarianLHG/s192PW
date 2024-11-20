@extends('layouts.plantilla1')
@section('titulo', 'Registro clientes')
@section('contenido')
    <style>
        .my-actions {
            margin: 2em 2em 0;
        }

        .order-1 {
            order: 1;
        }

        .order-2 {
            order: 2;
        }

        .order-3 {
            order: 3;
        }

        .right-gap {
            margin-right: auto;
        }
    </style>

    @if (session('exito'))
        <script>
            Swal.fire({
                title: "Respuesta del servidor",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif

    <!-- Inicia tarjetaCliente -->
    <div class="container mt-5 col-md-8">
        @foreach ($consultaClientes as $cliente)
            <div class="card text-justify font-monospace mb-3">
                <div class="card-header fs-5 text-primary">
                    {{ $cliente->nombre }}
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                    <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('editarCliente', $cliente->id) }}" class="btn btn-warning btn-sm">{{ __('Editar') }}</a>

                    <form id="deleteForm-{{ $cliente->id }}" action="{{ route('clientesEliminar', $cliente->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmarDelete({{ $cliente->id }})">
                            {{ __('Eliminar') }}
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Finaliza tarjetaCliente -->

    <script>
        function confirmarDelete(clienteId) {
            Swal.fire({
                title: '¿Estás seguro de que deseas eliminar este cliente?',
                text: "Esta acción no se puede deshacer.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminar',
                denyButtonText: 'No',
                cancelButtonText: 'Cancelar',
                showDenyButton: true,
                customClass: {
                    actions: 'my-actions',
                    cancelButton: 'order-1 right-gap',
                    confirmButton: 'order-2',
                    denyButton: 'order-3',
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`deleteForm-${clienteId}`).submit();
                } else if (result.isDenied) {
                    Swal.fire('El cliente no fue eliminado', '', 'info');
                }
            });
        }
    </script>
@endsection
