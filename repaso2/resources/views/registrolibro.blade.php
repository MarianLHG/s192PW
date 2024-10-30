 @extends('layouts.plantilla')
 @section('titulo', 'Registro')
 @section('contenido')
    <div class="container mt-5 col-md-6">
        @session('exito')
            <script>
                Swal.fire({
                    title: "ÉXITO",
                    text:"{{$value}}",
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
        <input type="text" class="form-control" name="txtisbn" value="{{old 'txtisbn'}}">
        <small>{{$errors->first('txtisbn')}}</small>
    </div>
    <div class="mb-3">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" name="txtlibro" value="{{old 'txtlibro'}}">
        <small>{{$errors->first('txtlibro')}}</small>

    </div>
    <div class="mb-3">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" name="txtautor" value="{{old 'txtautor'}}">
        <small>{{$errors->first('txtautor')}}</small>

    </div>
    <div class="mb-3">
        <label for="paginas">Paginas</label>
        <input type="number" class="form-control" name="txtpaginas" value="{{old 'txtpaginas'}}">
        <small>{{$errors->first('txtpaginas')}}</small>

    </div>
    <div class="mb-3">
        <label for="year">Año</label>
        <input type="number" class="form-control" name="txtyear" value="{{old 'txtyear'}}">
        <small>{{$errors->first('txtyear')}}</small>

    </div>
    <div class="mb-3">
        <label for="editorial">Editorial</label>
        <input type="text" class="form-control" name="txteditorial" value="{{old 'txteditorial'}}">
        <small>{{$errors->first('txteditorial')}}</small>

    </div>
    <div class="mb-3">
        <label for="correo">Email de la editorial</label>
        <input type="email" class="form-control" name="txtcorreo" value="{{old 'txtcorreo'}}">
        <small>{{$errors->first('txtcorreo')}}</small>

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