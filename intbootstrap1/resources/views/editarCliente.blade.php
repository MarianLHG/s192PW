@extends('layouts.plantilla1')
@section('titulo', 'Editar cliente')
@section('contenido')

    <!-- Inicia tarjetaCliente -->
     <div class="container mt-5 col-md-8">
        <form action="{{route('clientesUpdate', $cliente->id)}}" method="POST">
            @csrf
            @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{__('Nombre')}}</label>
                        <input type="text" class="form-control" name="txtnombre" value="{{$cliente->nombre}}">
                        <small class="fst-italic text-danger">{{ $errors->first('txtnombre')}}</small>
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{__('Apellido')}}</label>
                        <input type="text" class="form-control" name="txtapellido" value="{{ $cliente->apellido}}">
                        <small class="fst-italic text-danger">{{ $errors->first('txtapellido')}}</small>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">{{__('Correo')}}</label>
                        <input type="text" class="form-control" name="txtcorreo" value="{{ $cliente->correo}}">
                        <small class="fst-italic text-danger">{{ $errors->first('txtcorreo')}}</small>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Teléfono')}}</label>
                        <input type="text" class="form-control" name="txttelefono" value="{{ $cliente->telefono}}">
                        <small class='fst-italic text-danger'>{{ $errors->first('txttelefono')}}</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar</button>

                    <form action="{{route('clientesEliminar', $cliente->id)}}" method="POST">

                    </form>




        </form>
        

        
    </div>
    <!-- Finaliza tarjetaCliente -->
    
    
@endsection
