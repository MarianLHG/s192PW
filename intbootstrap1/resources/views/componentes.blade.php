@extends('layouts.plantilla1')

@section('titulo', 'Componentes')

@section('contenido')

    <!-- simplificacion de un componente -->
        <x-Card encabezado="Componente" titulo="Dinámico" textoBoton="Enviar" > 
            Soy el texto del primer componente 
        </x-Card>

        <x-Card encabezado="Componente2" titulo="Dinámico2" textoBoton="No Enviar" > 
            Soy el texto del segundo componente 
        </x-Card>

        <x-Alert tipo="success"> Gris </x-Alert>
        <x-Alert tipo="primary"> Azul </x-Alert>
        <x-Alert tipo="danger"> Rojo </x-Alert>


@endsection
