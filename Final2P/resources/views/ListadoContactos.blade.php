@extends('layouts.plantillaNav')
@section('contenido')


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Lista de Contactos </title>
    @vite(['resources/app.js'])



</head>


<body>

    <h1 class="display-1 text-warning text-center"> Listado de Contactos </h1>
    
    <a href="{{route('rutaform')}}" class="btn btn-primary"> Regresa al formulario </a>
    <a href="{{route('rutainicio')}}" class="btn btn-primary"> Regresa al inicio </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
@endsection