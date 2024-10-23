<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Repaso 1</title>

</head>
<body>
    <div class="container mt-5">
        <h1>Convertidor de unidades de almacenamiento</h1>
        <form action="/conversionUnidades" method="POST">
            @csrf

            <div class="mb-3">
                <label for="valor" class="form-larabel">VALOR: </label>
                <input type="number" class="form-control" id="valor" name="valor" required>
            </div>
            <div class="mb-3">
            <label for="tipo_conversion" class="form-larabel">Conversiones: </label>
            <select class="form-select" id="tipo_conversion" name="tipo_conversion">
                <option value="MBaGB">MB a GB</option>
                <option value="GBaMB">GB a MB</option>
                <option value="GBaTB">GB a TB</option>
                <option value="TBaGB">TB a GB</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Convertir</button>
        </form>
        @if (isset($result))
            <div class="mb-3">
                <h3> Equivalen a {{$result}}</h3>
            </div>
        @endif

        <div class="d-flex justify-content-end align-items-center text-center full-height">
        <a href="{{ route('rutainicio') }}" class="btn btn-primary">Regresar a Inicio</a>
        </div>

    </div>
</body>
</html>