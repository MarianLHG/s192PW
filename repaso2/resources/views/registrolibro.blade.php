 @extends('layouts.plantilla')
 @section('titulo', 'Registro')
 @section('contenido')
    <div class="container mt-5 col-md-6">
        <div class="card font-monospace">
            <div class="card-header fs-5 text-center">
                {{__('Registro Libro')}}
            </div>
            <div class="card-body text-justify">

    <form>
        @csrf

    <div class="mb-3">
        <label for="formGroupExampleInput">ISBN</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2">Titulo</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2">Autor</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2">Paginas</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2">Año</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2">Editorial</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2">Email de la editorial</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
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