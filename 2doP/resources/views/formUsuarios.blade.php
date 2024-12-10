<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/app.js'])
</head>
<body>



    <div class="container mt-5 col-md-6">
    @if (session('exito'))
        <x-alert tipo="success">
            {{ session('exito') }}
        </x-alert>
    @endif

        @session ('exito')
            <script>
                Swal.fire({
                title: "Éxito",
                text: "{{$value}}",
                icon: "success"
                });
            </script>
        @endsession
    
        <div class="card font-arial">
            <div class="card-header fs-5 text-center ">
                Registrar Usuario
            </div>

        <div class="card-body">
        

        <form action="{{route('rutaenviar')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label  class="form-label">Correo: </label>
            <input type="text" class="form-control"  name="txtcorreo">
            <small class="fst-italic text-danger">{{$errors->first('txtcorreo')}}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="text" class="form-control"  name="txtcontraseña">
            <small class="fst-italic text-danger">{{$errors->first('txtcontraseña')}}</small>

        </div>                

        <div class="mb-3">
            <label  class="form-label">Edad: </label>
            <input type="text" class="form-control" name="txtedad" >
            <small class="fst-italic text-danger">{{$errors->first('txtedad')}}</small>
        </div>
        
        

        <button type="submit" class="btn btn-danger "> Guardar Usuario </button>
        </form>
    </div>
 </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>




</body>
</html>