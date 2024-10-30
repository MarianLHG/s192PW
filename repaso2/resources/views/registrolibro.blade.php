 @extends('layouts.plantilla')
 @section('titulo', 'Registro')
 @section('contenido')

    <form>
    <div class="form-group">
        <label for="formGroupExampleInput">ISBN</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Titulo</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Autor</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Paginas</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Año</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Editorial</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Email de la editorial</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    </form>
 
 
 
 @endsection