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
            <img src="{{ url('/images/TRANFO1_01.PNG')}}" alt="TRANFO_01" class="producto__imagen mt-3">
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Caracteristicas</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Proveedor: Volto</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Contacto: Francisco Torres</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Teléfono: 8115799050</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Instalación: 17/07/21</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Capacidad: 150KVA</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">6.-Marca: Prolec</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">7.-Modelo: Djn616</li>
                {{-- Version anterior --}}
                {{-- <li class="boton3 boton--secundario">7.-Voltaje: 220 voltios</li> --}}
            </ul>
        </aside>
        <article class="maquina">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <img src="{{ url('/images/TRANFO1_02.PNG')}}" alt="Troquel T01" class="producto__imagen mt-3">

        </article>
        {{-- <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Motor eléctrico</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Volante</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Martinete</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Mesa de soporte de dado</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Armazón</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">6.-Gabinete eléctrico</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">7.-Control de encendido y apagado</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">8.-Pedal</li>
                
            </ul>
        </aside> --}}
    </div>
    <!--grid2-->
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
    </div>
    <!--grid3-->
</main>
@endsection
{{-- Creando el footer --}}
@section('footer')
    @include('ui.footer')
@endsection