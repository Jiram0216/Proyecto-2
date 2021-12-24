{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
{{-- Agregando mi contendido en senction mediante @section y @endsection --}}
@section('content')
<main class="contenedor contenido--principal">
    <div class="grid2">
        <article class="maquina">
            <div class="padre">
                <h2 class="hijo">Maquina</h2>
            </div>
            <img src="{{ url('/images/P03_1.PNG')}}" alt="Prensa P02" class="producto__imagen mt-3">
            <p class="maquina__texto"> También conocidas como máquinas plegadoras, 
                las prensas dobladoras están especialmente fabricada para moldear y 
                curvar hojas, placas o piezas de metal. </p>
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Caracteristicas</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Marca: Chicago D&K</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Modelo: 6L8</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Capacidad: 55 Toneladas</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Garganta: 8 ft"</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Potencia: Motor 3 Hp</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">6.-Voltaje: 220 voltios</li>
                <!-- <li class="boton3 boton--secundario">7.-Transmisión: Hidráulica</li>
                <li class="boton3 boton--secundario">8.-3 Pistones: Diámetro 5 In</li> -->
            </ul>
        </aside>
        <article class="maquina">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <img src="{{ url('/images/P03_2.PNG')}}" alt="Prensa P02" class="producto__imagen mt-3">
            <img src="{{ url('/images/P03_3.PNG')}}" alt="Prensa P02" class="producto__imagen mt-2">
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Motor eléctrico N°1: 5 HP</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Motor eléctrico N°2: 5 HP</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Armazón</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Volante</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Cortina</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">6.-Mordazas</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">7.-Bancada</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">8.-Gabinete eléctrico</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">9.-Control de cortina</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">10.-Control de encendido y apagado</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">11.-Pedal</li>
            </ul>
        </aside>
    </div><!--grid2-->
    <div class="grid3 fondo">
        <article>
            <div class="padre">
                <h2 class="hijo">Mantenimiento</h2>
            </div>
            <ul class="lista">
                <li>Orden de trabajo</li>
                <li>Ultimo mantenimiento</li>
                <li>Próximo mantenimiento</li>
            </ul>
        </article>
        <article>
            <div class="padre">
                <h2 class="hijo">Proveedores</h2>
            </div>
            <ul class="lista">
                <li>Nombre</li>
                <li>Contacto</li>
                <li>telefono</li>
                <li>Dirección</li>
                <li>Ubicación</li>
                <li>Piezas</li>
            </ul>
        </article>
        <article>
            <div class="padre">
                <h2 class="hijo">Costos</h2>
            </div>

        </article>
    </div><!--grid3-->
</main>
@endsection
{{-- Creando el footer --}}
@section('footer')
    @include('ui.footer')
@endsection