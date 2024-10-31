 @extends('layouts.plantilla')
 @section('titulo', 'Registro')
 @section('contenido')
 <head>
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
        <label for="isbn">{{__('ISBN')}}</label>
        <input type="text" class="form-control" name="txtisbn" value="{{old ('txtisbn')}}">
        <small class="fst-arial text-danger">{{$errors->first('txtisbn')}}</small>
    </div>
    <div class="mb-3">
        <label for="titulo">{{__('Titulo')}}</label>
        <input type="text" class="form-control" name="txtlibro" value="{{old ('txtlibro')}}">
        <small class="fst-arial text-danger">{{$errors->first('txtlibro')}}</small>

    </div>
    <div class="mb-3">
        <label for="autor">{{__('Autor')}}</label>
        <input type="text" class="form-control" name="txtautor" value="{{old ('txtautor')}}">
        <small class="fst-arial text-danger">{{$errors->first('txtautor')}}</small>

    </div>
    <div class="mb-3">
        <label for="paginas">{{__('Paginas')}}</label>
        <input type="number" class="form-control" name="txtpaginas" value="{{old ('txtpaginas')}}">
        <small class="fst-arial text-danger">{{$errors->first('txtpaginas')}}</small>

    </div>
    <div class="mb-3">
        <label for="year">{{__('Año')}}</label>
        <input type="number" class="form-control" name="txtyear" value="{{old ('txtyear')}}">
        <small class="fst-arial text-danger">{{$errors->first('txtyear')}}</small>

    </div>
    <div class="mb-3">
        <label for="editorial">{{__('Editorial')}}</label>
        <input type="text" class="form-control" name="txteditorial" value="{{old ('txteditorial')}}">
        <small class="fst-arial text-danger">{{$errors->first('txteditorial')}}</small>

    </div>
    <div class="mb-3">
        <label for="correo">{{__('Email de la editorial')}}</label>
        <input type="text" class="form-control" name="txtcorreo" value="{{old ('txtcorreo')}}">
        <small class="fst-arial text-danger">{{$errors->first('txtcorreo')}}</small>

    </div>

    <button type="submit" class="btn btn-success btn-sm">{{__('Guardar Libro')}}</button>

    </form>
    </div>
    </div>
    </div>
    
    <div class="mb-3">
    </div>

    <footer class="bg-body-tertiary text-center">
        <p> {{__('Biblioteca Gandhi')}}</p>
        <div class="text-canter p-3" style="background-color: rgba(0,0,0,0.5);">
            <p>&copy; {{date('Y')}}-{{date('d')}} {{date('F')}}</p>
        </div>
    </footer>

 
 @endsection