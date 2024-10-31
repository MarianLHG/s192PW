@extends('layouts.plantilla')
@section('titulo', 'Noticia')
@section('contenido')

    <style>
    body, html{
        height: 100%;
        margin: 0;
        padding: 0;
    }
    .navbar{
        background-color: #800000!important;
    }   
    .noticia{
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    blockquote{
        border-left: 4px solid #ccc;
        padding-left: 1rem;
        font-style: italic;
    }
    
    
    </style>
    <header>
        <p style="font-family: sans-serif; font-size: 30px; text-align: center;" >{{__('Eñe 2024: 150 voces y 90 actos en el gran festival de la creación de Madrid')}}</p>
    </header>
    <section>
    <div class="noticia">

    <p style="text-align: justify;">{{__('La capital acogerá entre el 9 y el 26 de de noviembre los encuentros de autores como Scurati, Beevor, Blanciana, Cartarescu, Zurita y Barceló, unidos en torno al tema de la democracia. El 
        Festival tendrá su pista central en el Círculo de Bellas Artes de Madrid, como siempre pero se diseminará por todo Madrid y tendrá uan extensión en Málaga (hasta el 1 de diciembre).')}}</p>
    <p style="text-align: justify;">{{__('Eñe celebrará actos en el Ateneo de Madrid (una performance llamada Me acuerdo, al estilo de George Perec), el Museo del Prado (Miquel Barceló y Borja Hermoso charlarán ante Las Meninas),
        en la Biblioteca Regional de Madrid (habrá un día dedicado a la narrativa fantástica y transmedia) en la Real Academia Española, en el Instituto Cervantes, en la Serrería Belga, en Alcalá de Henares y Chinchón...')}}</p>
    <p style="text-align: justify;">{{('Un momento especial en el programa es el que promete la intervención de la Premio Princesa de Asturias de las Letras, Ana Blandiana, que leerá los versos de la rusa Anna Ajmátova en el Teatro
        de la Abadía y hablará de su vida como un anhelo de democracia. En ese mismo escenario, el poeta chileno Raúl Zurita estará acompañado por sus colegas españoles Antonio Lucas y Aurora Luque, 
        ambos ganadores del Premio Internacional de Poesía Loewe. Eñe también tendrá un espacio para las lenguas cooficiales del Estado con ventanas a la literatura vasca, comisariada por la escritora
        Katixa Aguirre; la literatura catalana, comisariada por los actores y dramaturgos Nao Albet y Marcel Borrás; y, por primera vez, a la literatura gallega, comisariada por el escritor Xesús Fraga.')}}</p>
        
    </div>
    </section>
    <footer class="bg-body-tertiary text-center">
        <p>{{__('Biblioteca Gandhi')}}</p>
        <div class="text-canter p-3" style="background-color: rgba(0,0,0,0.5);">
            <p>&copy; {{date('Y')}}-{{date('d')}} {{date('F')}}</p>
        </div>
    </footer>
    @endsection('contenido')
    
