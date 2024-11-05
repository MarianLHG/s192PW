<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/app.js'])
</head>
<body>
    <div class="container mt-5 col-md-6">
        @session ('exito')
            <script>
                Swal.fire({
                title: "Respuesta del servidor",
                text: "{{$value}}",
                icon: "success"
                });
            </script>
        @endsession
    
        <div class="card font-monospace">
            <div class="card-header fs-5 text-center">
                Registrar Usuario
            </div>
        <div class="card-body text-justify">
        

    <form action="/enviarDatos" method="POST">

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
        
        

        <button type="" class="btn btn-danger "> Guardar Usuario </button>
        </form>
    </div>
    
    
    <div class="mb-3">
    </div>



</body>
</html>