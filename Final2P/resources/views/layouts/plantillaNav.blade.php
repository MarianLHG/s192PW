<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources/js/app.js"])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Nav</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutainicio') }}"> Home </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaform')?'text-warning':''}}"  href="{{route('rutaform')}}">Gestion de contactos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutalista')?'text-warning':''}}" href="{{ route('rutalista') }}">Lista contactos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('contenido')
</body>
</html>