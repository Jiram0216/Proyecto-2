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
            <img src="{{url('/images/R01_1.PNG')}}" alt="Roladora R01" class="producto__imagen mt-3">
            <p class="maquina__texto">
                Las Máquinas Roladoras están especialmente fabricada para moldear y curvar hojas, placas o piezas de
                metal.
            </p>
            <p class="maquina__texto">
                Poseen dos ventajas muy importantes: la velocidad y precisión. Utilizan un motor eléctrico para dar
                energía a una serie de rodillos, que ajustado a un embrague hacen que al ir avanzando la lámina tome
                forma de la pieza deseada.
            </p>
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Caracteristicas</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Marca: MAC MACHINERY TOOLS</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Modelo: YX-66</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Potencia: Motor 7 HP</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Voltaje: 220 volts</li>
            </ul>
        </aside>
        <article class="maquina">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <img src="{{url('/images/R01_1.PNG')}}" alt="Roladora R01" class="producto__imagen mt-3">

        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <ul class="lista">
                <a href="#uno" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">1.-Gabinete Electrónico</a>
                <a href="#dos" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">2.-Motor Eléctrico</a>
                <a href="#tres" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">3.-Bomba de Aceite</a>
                <a href="#cuatro" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">4.-Troquel</a>
                <a href="#cinco" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">5.-Guillotina</a>
                <a href="#sies" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">6.-Pistones</a>
                <a href="#siete" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">7.-Gabinete de Control</a>
                <a href="#tres" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">8.-Botones de Pausa</a>
                <a href="#cuatro" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">9.-Control de Mando a Distancia</a>
                <a href="#cinco" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">10.-Palanca de Embrague</a>
                <a href="#sies" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">11.-Embobinador</a>
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