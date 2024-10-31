

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    @vite(['resources/js/app.js'])
    <style>
        body, html {
            height: 100%;
        }
        .full-height {
            height: 100vh;
        }
    </style>

</head>
<body>
     @include('layouts.plantilla')

    <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light" style="font-family: serif;" >{{__('¡Bienvenido a Biblioteca Gandhi!')}}</h1>
        <p class="lead text-muted" style="font-family: sans-serif">{{__('Aquí los libros hablan por ti')}}</p>
        <p>
          <a href="{{route('rutaregistro')}}" class="btn btn-primary my-2">{{__('Registrar un libro')}}</a>
        </p>
      </div>
    </div>
    <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" >
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{asset('images/ferialibros.jpeg')}}">
            <div class="card-body">
              <p class="card-text" style="font-family: sans-serif;">{{__('Eñe 2024: 150 voces y 90 actos en el gran festival de la creación de Madrid')}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a class="btn btn-sm btn-outline-secondary" href="{{route('rutanoticia')}}">{{__('Leer')}}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
    

    </section>


    <footer class="bg-body-tertiary text-center">
        <p> Biblioteca Gandhi</p>
        <div class="text-canter p-3" style="background-color: rgba(0,0,0,0.5);">
            <p>&copy; {{date('Y')}}-{{date('d')}} {{date('F')}}</p>
        </div>
    </footer>
</body>
</html>