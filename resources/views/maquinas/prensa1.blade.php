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
            <img src="{{ url('/images/P01_1.png')}}" alt="Prensa P01" class="producto__imagen mt-3">
            <p class="maquina__texto"> También conocidas como máquinas plegadoras, 
                las prensas dobladoras están especialmente fabricada para moldear y 
                curvar hojas, placas o piezas de metal. </p>
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Caracteristicas</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Marca: Titan</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Modelo: P3P75T10</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Capacidad: 75 Toneladas</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Garganta: 10 ft"</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Potencia: Motor 7 Hp</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">6.-Voltaje: 220 voltios</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">7.-Transmisión: Hidráulica</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">8.-3 Pistones: Diámetro 5 In</li>
            </ul>
        </aside>
        <article class="maquina">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <img src="{{ url('/images/P01_2.png')}}" alt="Prensa P01" class="producto__imagen mt-3">
            
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Motor eléctrico N°1: 4 HP</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Motor eléctrico N°2: 2 HP</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Armazón</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Pistones hidráulicos (3)</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Bomba hidráulica N°1</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">6.-Bomba hidráulica N°2</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">7.-Cortina</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">8.-Control de cortina</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">9.-Tornillo de ajuste de grados</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">10.-Mordazas</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">11.-Bancada</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">12.-Gabinete eléctrico</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">13.-Depósito de aceite y sistema hidráulico</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">14.-Tablero de ciclos</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">15.-Control de bancada</li>
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