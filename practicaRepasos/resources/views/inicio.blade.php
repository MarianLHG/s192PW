<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Portada</title>

</head>
<body>
    <div class=" container mt-5 d-flex flex-column justify-content-center align-items-center text-center full-height">
    <div class="card" style="width: 18rem;">
       <div class="card-body">
         <h5 class="card-title">Marian Lizeth Hernández García</h5>
         <p class="card-text">Carrera: Ingeniería en Sistemas</p>
         <p class="card-text">Edad: 21 años</p>

    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Grupo: S192</li>
        <li class="list-group-item">Materia: Programación web</li>
        <li class="list-group-item">Universidad Politécnica de Querétaro</li>
    </ul>
    </div> 
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <p>Presione el botón para ver Repaso 1</p>
        <a href="{{ route('rutarepaso1') }}" class="btn btn-primary">Ir al Repaso 1</a>
    </div>
    </div>
</body>
</html>