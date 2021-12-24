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
            <img src="{{ url('/images/T06_1.png')}}" alt="Troquel T06" class="producto__imagen mt-3">
            <p class="maquina__texto">Las troqueladoras son máquinas de alta producción ya sea para corte, embutido o
                estampado de lámina y placa metálica. Su principal aplicación es para hacer herrajes, piezas de joyería,
                monedas, piezas pequeñas en la industria automotriz, muebles metálicos, etc. El troquel o punzón es la
                herramienta de corte o estampado y está compuesto de hembra y macho. </p>
            <p class="maquina__texto">Los elementos básicos de una troqueladora lo constituyen el troquel que tiene la
                forma y dimensiones del agujero que se quiera realizar, y la matriz de corte por donde se inserta el
                troquel cuando es impulsado de forma enérgica por la potencia que le proporciona la prensa mediante un
                accionamiento de excéntrica que tiene y que proporciona un golpe seco y contundente sobre la chapa,
                produciendo un corte limpio de la misma.</p>
            <p class="maquina__texto">Su funcionamiento es electro neumático, ya que la fuerza aplicada para cortar la
                realiza un cilindro neumático pero la señal que hace que la troqueladora actúe es eléctrica.</p>
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Caracteristicas</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Marca: Rouselle</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Modelo: TRQ-758</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Capacidad: 30
                    Toneladas</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Mesa: 14" x 20"</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Clutch: Electro
                    Mecánico</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">6.-Potencia: 3 HP</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">7.-Gabinete eléctrico
                </li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">8.-Voltaje: 220 voltios
                </li>
            </ul>
        </aside>
        <article class="maquina">
            <div class="padre">
                <h2 class="hijo">Caracteristicas</h2>
            </div>
            <img src="{{ url('/images/T06_1.png')}}" alt="Troquel T06" class="producto__imagen mt-3">

        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Motor eléctrico 3HP.
                </li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Volante</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Martinete.</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Mesa de soporte de
                    dado</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Armazón</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">6.-Control de encendido
                    y apagado</li>
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