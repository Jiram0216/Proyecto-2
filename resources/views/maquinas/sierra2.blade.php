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
            <img src="{{ url('/images/S02_1.PNG')}}" alt="Sierra S02" class="producto__imagen mt-3">
            <p class="maquina__texto"> También conocidas como máquinas plegadoras, 
                las prensas dobladoras están especialmente fabricada para moldear y 
                curvar hojas, placas o piezas de metal. </p>
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Caracteristicas</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Marca: CTD MACHINES</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Modelo: M25K</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Serie: 874R</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Potencia: 2 Hp</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Voltaje: 220 voltios</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">6.-RPM: 3725</li>
            </ul>
        </aside>
        <article class="maquina">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <img src="{{ url('/images/S02_2.PNG')}}" alt="Sierra S02" class="producto__imagen mt-3">
            <div class="container">
                <div class="collapse" id="uno">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Empuñadura:</h3>
                        <p>
                            Sirve para poder trabajar con comodidad y seguridad. El mecanismo permite bajar y subir la hoja de corte.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="dos">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Botón de liberación del brazo:</h3>
                        <p>
                            Para que funcione, además de apretar el gatillo de la empuñadura, hay que accionar el botón que libera el brazo.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="tres">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Carcasa de protección:</h3>
                        <p>
                            El disco de corte está protegido por una carcasa fija en la parte superior y otra móvil que se va abriendo a medida que el disco ataca la madera.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="cuatro">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Regleta tope:</h3>
                        <p>
                            Puede o no ser regulable. Esta es la parte contra la que se apoyan las piezas para que queden firmemente sujetas antes de hacer el corte.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="cinco">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Plataforma de corte:</h3>
                        <p>
                            Parte donde se apoyan las piezas para facilitar el corte de elementos grandes. La capacidad de corte viene establecida por la capacidad de la mesa.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="seis">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Disco de corte:</h3>
                        <p>
                            El disco debe ser adecuado al material que se va a cortar, al diámetro de la máquina y estar en buenas condiciones de uso.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="siete">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Regulación del inglete:</h3>
                        <p>
                            Dispositivo para fijar el ángulo del corte a inglete.
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
                        <h3 class="titulo-categoria text-uppercase">Extracción de viruta:</h3>
                        <p>
                            Orificio para la extracción del serrín o virutas, con posibilidad de acoplar un aspirador de taller o una bolsa desmontable.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="diez">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Soportes de apoyo:</h3>
                        <p>
                            Muy útiles para apoyar piezas largas cuando se cortan a inglete. Son extraíbles a la medida deseada.
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
                    data-toggle="collapse">1.-Empuñadura</a>
                <a href="#dos" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">2.-Botón de liberación del brazo</a>
                <a href="#tres" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">3.-Carcasa de protección</a>
                <a href="#cuatro" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">4.-Regleta tope</a>
                <a href="#cinco" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">5.-Plataforma de corte</a>
                <a href="#seis" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">6.-Disco de corte</a>
                <a href="#siete" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">7.-Regulación del inglete</a>
                <a href="#ocho" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">8.-Regulación del bisel</a>
                <a href="#nueve" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">9.-Extracción de viruta</a>
                <a href="#diez" class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold"
                    data-toggle="collapse">10.-Soportes de apoyo</a>
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