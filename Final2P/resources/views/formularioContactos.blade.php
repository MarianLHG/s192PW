@extends('layouts.plantillaNav')
@section('contenido')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/app.js'])


</head>
<body>


    <div class="container">
        @session ('exito')
            <script>
                Swal.fire({
                title: "Respuesta del servidor",
                text: "{{$value}}",
                icon: "success"
                });
            </script>
        @endsession

    <h1 class="display-1 text-prmiary text-center">Gestión de Contactos </h1>

    <form action="{{route('rutafrm')}}" method="POST">
        @csrf 
        
        <div  class="mb-3" >
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" >
            <small class='fst-italic text-danger'>{{ $errors->first('nombre')}}</small>
        </div>

        <div  class="mb-3" >
            <label for="correo" class="form-label" >Correo:</label>
            <input type="mail" class="form-control" name="correo" >
            <small class='fst-italic text-danger'>{{ $errors->first('Correo')}}</small>

        </div>

        <div class="mb-3" >
            <label for="telefono" class="form-label" >Telefono:</label>
            <input type="text" class="form-control" name="telefono" >
            <small class='fst-italic text-danger'>{{ $errors->first('telefono')}}</small>

        </div>

        <button type="submit" class="btn btn-danger">Agregar Contacto</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    @endsection
</body>
</html>