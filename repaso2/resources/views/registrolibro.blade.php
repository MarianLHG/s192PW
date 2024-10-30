 @extends('layouts.plantilla')
 @section('titulo', 'Registro')
 @section('contenido')
    <div class="container mt-5 col-md-6">
        @session('exito')
            <script>
                Swal.fire({
                    title: "ÉXITO",
                    icon: "success"
                });
            </script>
        @endsession
        <div class="card font-monospace">
            <div class="card-header fs-5 text-center">
                {{__('Registro Libro')}}
            </div>
            <div class="card-body text-justify">

    <form action="/enviarLibro" method="POST">
        @csrf

    <div class="mb-3">
        <label for="isbn">ISBN</label>
        <input type="text" class="form-control" name="txtisbn">
    </div>
    <div class="mb-3">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" name="txtlibro">
    </div>
    <div class="mb-3">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" name="txtautor">
    </div>
    <div class="mb-3">
        <label for="paginas">Paginas</label>
        <input type="number" class="form-control" name="txtpaginas">
    </div>
    <div class="mb-3">
        <label for="year">Año</label>
        <input type="number" class="form-control" name="txtyear">
    </div>
    <div class="mb-3">
        <label for="editorial">Editorial</label>
        <input type="text" class="form-control" name="txteditorial">
    </div>
    <div class="mb-3">
        <label for="corro">Email de la editorial</label>
        <input type="email" class="form-control" name="txtcorreo">
    </div>

    <button type="submit" class="btn btn-success btn-sm">{{__('Guardar Libro')}}</button>

    </form>
    </div>
    </div>
    </div>
    
    <div class="mb-3">
    </div>

    <footer class="bg-body-tertiary text-center">
        <p> Biblioteca Gandhi</p>
        <div class="text-canter p-3" style="background-color: rgba(0,0,0,0.5);">
            <p>&copy; {{date('Y')}}-{{date('d')}} {{date('F')}}</p>
        </div>
    </footer>

 
 @endsection