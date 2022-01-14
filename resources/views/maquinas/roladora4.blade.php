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
            <img src="{{url('/images/CUV1_01.PNG')}}" alt="Curvatron CV" class="producto__imagen mt-3">
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Caracteristicas</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Marca: </li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Modelo: </li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Potencia: Motor 7 HP</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Voltaje: 220 volts</li>
            </ul>
        </aside>
        <article class="maquina">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <img src="{{url('/images/CUV1_02.PNG')}}" alt="Curvatron CV" class="producto__imagen mt-3">
            <img src="{{url('/images/CUV1_03.PNG')}}" alt="Curvatron CV" class="producto__imagen mt-3">
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <ul class="lista">
                <a href="#uno" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">1.-Rueda de retención</a>
                <a href="#dos" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">2.-Pistones de rolado.</a>
                <a href="#tres" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">3.-Guarda de seguridad.</a>
                <a href="#cuatro" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">4.-Chumacera de eje de rotación.</a>
                <a href="#cinco" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">5.-Rueda de rolado.</a>
                <a href="#sies" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">6.-Soporte de rueda.</a>
                <a href="#siete" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">7.-Superficie reflectiva del curvatrón.</a>
                <a href="#tres" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">8.-Bandeja de salida.</a>
                <a href="#cuatro" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">9.-Anclaje de rieles.</a>
                <a href="#cinco" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">10.-Base metálica de pistones.</a>
                <a href="#sies" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">11.-Platina sencilla/doble para sensores.</a>
                <a href="#tres" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">12.-Sensor reflexivo de posición.</a>
                <a href="#cuatro" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">13.-Porta rueda.</a>
                <a href="#cinco" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">14.-Rueda de presión.</a>
                <a href="#sies" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">15.-Manguera de aire compromido.</a>
                <a href="#siete" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">16.-Válvula de velocidad.</a>
                <a href="#tres" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">17.-Riel guía de curvatrón.</a>
            </ul>
        </aside>
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