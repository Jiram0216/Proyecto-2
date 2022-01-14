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
            <img src="{{ url('/images/COMP3_01.PNG')}}" alt="COMP3_01" class="producto__imagen mt-3">
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Caracteristicas</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Proveedor: Neumática</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Contacto: Narciso Rodríguez</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Teléfono: 8119387043</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Instalación: </li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Capacidad: 150 psi</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">6.-Cabeza: 3.7hp</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">7.-Tanque: 273 Litros</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">8.-Marca: Husky</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">9.-Modelo: C602H.M 220v</li>
                
            </ul>
        </aside>
        <article class="maquina">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <img src="{{ url('/images/COMP3_02.PNG')}}" alt="COMP3_02" class="producto__imagen mt-3">

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