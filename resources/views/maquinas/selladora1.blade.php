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
            <img src="{{url('/images/TS-NS3000.PNG')}}" alt="Selladora TS-NS3000" class="producto__imagen mt-3">
            <p class="maquina__texto mt-1">
                El sellado de celdas de Policarbonato Celular tiene como objetivo evitar filtraciones al interior de la
                hoja, ya sea de agua, polvo o algún otro tipo de material.
            </p>
            <p class="maquina__texto">
                El Proceso se realiza con un equipo diseñado por Equipol, S.A. de C.V. el cual consta de una serie de
                dados con resistencias por medio del cual se calienta el Policarbonato hasta lograr el sellado de las
                celdas, siempre pasando por las pruebas de calidad correspondientes para asegurarnos que no haya
                filtraciones y que las medidas finales de la lámina estén dentro de la tolerancia establecida por los
                Ingenieros especialistas de la División Construcción.
            </p>
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Caracteristicas</h2>
            </div>
            <ul class="lista">
                <a href="#uno" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">1.-Marca: TS-NS3000/a>
                <a href="#dos" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">2.-Voltaje: 220 volts</a>
            </ul>
        </aside>
        <article class="maquina">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <img src="{{url('/images/TS-NS3000.PNG')}}" alt="Selladora TS-NS3000" class="producto__imagen mt-3">

        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <ul class="lista">
                <a href="#uno" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">1.-Armazón</a>
                <a href="#dos" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">2.-Dado Superior</a>
                <a href="#tres" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">3.-Dado Inferior</a>
                <a href="#cuatro" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">4.-Resistencias</a>
                <a href="#cinco" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">5.-Panel de Control de Temperatura</a>
                <a href="#sies" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">6.-Gabinete de Control Eléctrico</a>
                <a href="#siete" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">7.-Lámpara</a>
                <a href="#tres" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">8.-Tablero de siclos de Producción</a>
                <a href="#cuatro" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">9.-Soporte de Guía</a>
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