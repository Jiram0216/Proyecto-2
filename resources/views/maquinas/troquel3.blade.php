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
            <img src="{{ url('/images/T03_1.png')}}" alt="Troquel T03" class="producto__imagen mt-3">
            <p class="maquina__texto"> Las troqueladoras son máquinas de alta producción ya sea para corte, embutido o estampado de lámina y placa metálica. 
                Su principal aplicación es para hacer herrajes, piezas de joyería, monedas, piezas pequeñas en la industria automotriz, 
                muebles metálicos, etc. El troquel o punzón es la herramienta de corte o estampado y está compuesto de hembra y macho. </p>
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Caracteristicas</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Marca: Rousselle</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Modelo: 3E</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Capacidad: 25 Toneladas</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Mesa: 14" x 20"</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Clutch Neumatico</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">6.-Potencia: 2 HP</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">7.-Gabinete: Eléctrico</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">8.-Voltaje: 220 voltios</li>
            </ul>
        </aside>
        <article class="maquina">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <img src="{{ url('/images/T03_2.png')}}" alt="Troquel T03" class="producto__imagen mt-3">
            
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Motor eléctrico 3 HP</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Volante</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Martinete</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Mesa de soporte de dado</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Armazón</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">6.-Gabinete eléctrico</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">7.-Control de encendido y apagado</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">8.-Pedal</li>
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