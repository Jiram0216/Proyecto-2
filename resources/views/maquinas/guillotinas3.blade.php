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
            <img src="{{url('/images/G03_1.PNG')}}" alt="Guillotina G03" class="producto__imagen mt-3">
            <p class="maquina__texto">
                Se denomina guillotina a una herramienta que se utiliza para cortar papel,
                plástico, y láminas metálicas o de madera de diferentes espesores.
            </p>
            <p class="maquina__texto">
                El guillotinado es la operación de corte de una lámina de metal a lo largo de una línea recta entre dos
                bordes de corte. Se usa típicamente para reducir grandes láminas a secciones más pequeñas para
                operaciones posteriores de prensado.
            </p>
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Caracteristicas</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Marca: Precise
                    MACHINERY</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Modelo: B5-712</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Mesa: 27.5" Largo,
                    17" ancho
                    Toneladas</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Potencia: 3 Hp
                </li>
            </ul>
        </aside>
        <article class="maquina">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <img src="{{ url('/images/G01_2.PNG')}}" alt="Guillotina G02" class="producto__imagen mt-3">

            <div class="container">
                <div class="collapse" id="uno">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">El tablero CNC:</h3>
                        <p>
                            El control numérico (CN) o control decimal numérico es un sistema de automatización de
                            máquinas herramienta que son operadas mediante comandos programados en un medio de
                            almacenamiento, en comparación con el mando manual mediante volantes o palanca.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="dos">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Bomba hidráulica:</h3>
                        <p>
                            En general, una bomba se utiliza para incrementar la presión de un líquido añadiendo energía
                            al sistema hidráulico, para mover el fluido de una zona de menor presión a otra de mayor
                            presión.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="tres">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Sistema de tope hidráulico:</h3>
                        <p>
                            Detiene el movimiento del mecanismo, sirve para que no se sobrepase un punto determinado.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="cuatro">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Pistones:</h3>
                        <p>
                            Sirven para desplazar la cuchilla de un punto a otro.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="cinco">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Bancada de corte:</h3>
                        <p>
                            Es donde se pone la placa que se va a cortar.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="seis">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Manivela de inclinación:</h3>
                        <p>
                            Es la que mueve la cuchilla para darle la inclinación requerida dependiendo del corte.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="siete">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Rodillos de desplazamiento:</h3>
                        <p>
                            Sirven para mover la placa.
                        </p>
                    </div>
                </div>
            </div>

        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <ul class="lista">
                <a href="#uno" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">1.-Tablero CNC</a>
                <a href="#dos" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">2.-Bomba hidráulica</a>
                <a href="#tres" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">3.-Sistema de tope hidráulico</a>
                <a href="#cuatro" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">4.-Pistones</a>
                <a href="#cinco" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">5.-Bancada de corte</a>
                <a href="#sies" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">6.-Manivela de inclinación</a>
                <a href="#siete" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">7.-Rodillos de desplazamiento</a>
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