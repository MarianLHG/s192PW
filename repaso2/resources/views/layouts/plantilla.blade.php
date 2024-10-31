
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources/js/app.js"])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('titulo')</title>
    <style>
    body, html{
        height: 100%;
        margin: 0;
        padding: 0;
    }
    .navbar{
        background-color: #800000!important;
    }   

</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
    
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <img src="{{asset('images/librosicono.png')}}" width="60" height="60">
    </div>
    <a class="navbar-brand" href="{{route('rutainicio')}}" style="color: white; font-family: cambria; font-size: 20px;">{{__('Inicio')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    </nav>
 
    
    @yield('contenido')
    
</body>
</html>