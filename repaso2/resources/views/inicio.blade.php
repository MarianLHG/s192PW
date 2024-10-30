

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
     <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h1 class="display-1">Bienvenido a Biblioteca Gandhi</h1>
     </div>
    <footer class="bg-body-tertiary text-center">
        <p> Biblioteca Gandhi</p>
        <div class="text-canter p-3" style="background-color: rgba(0,0,0,0.5);">
            <p>&copy; {{date('Y')}}-{{date('d')}} {{date('F')}}</p>
        </div>
    </footer>
</body>
</html>