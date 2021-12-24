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
            <img src="{{ url('/images/G02_1.PNG')}}" alt="Guillotina G02" class="producto__imagen mt-3">
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
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Modelo: G4L10T16</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Serie: N°0916</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Capacidad: 16 T/cm3</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Garganta: 10 ft"</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Potencia: Motor 5 Hp</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">6.-Voltaje: 220 voltios</li>
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
                        <h3 class="titulo-categoria text-uppercase">Bancada:</h3>
                        <p>Pieza de fundición sobre la que descansa la máquina</p>
                    </div>
                </div>
                <div class="collapse" id="dos">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Bastidor:</h3>
                        <p>
                            Pieza de hierro que se apoya sobre la bancada y soporta la cuchilla y el pisón.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="tres">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Mesa:</h3>
                        <p>
                            Pieza de hierro sobre la que se apoya el material a cortar y a la que pueden fijarse accesorios como guías o escuadras.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="cuatro">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Pisón:</h3>
                        <p>
                            Pieza de fundición que presiona y sujeta el material sobre la mesa de trabajo antes de efectuarse el corte.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="cinco">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Corredora o porta-cuchilla:</h3>
                        <p>
                            Pieza que se desplaza verticalmente a la mesa y aloja a la cuchilla móvil.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="seis">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Cuchilla móvil:</h3>
                        <p>
                            Pieza de acero unida a la corredera diseñada para cortar el material.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="siete">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Cuchilla fija:</h3>
                        <p>
                            Pieza de acero unida a la mesa y diseñada para cortar.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="ocho">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Grupo hidráulico o Sistema mecánico:</h3>
                        <p>
                            Sistemas que permiten el funcionamiento de los diferentes órganos de la máquina.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="nueve">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Dispositivo de accionamiento:</h3>
                        <p>
                            Elemento de mando de la máquina que puede ser manual o con el pie. (pulsador, pedal, barra, etc.).
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
                    data-toggle="collapse">1.-Bancada</a>
                <a href="#dos" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">2.-Bastidor</a>
                <a href="#tres" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">3.-Mesa</a>
                <a href="#cuatro" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">4.-Pisón</a>
                <a href="#cinco" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">5.-Corredora o porta-cuchilla</a>
                <a href="#seis" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">6.-Cuchilla móvil</a>
                <a href="#siete" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">7.-Cuchilla fija</a>
                <a href="#ocho" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">8.-Grupo hidráulico o Sistema mecánico</a>
                <a href="#nueve" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">9.-Dispositivo de accionamiento</a>
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