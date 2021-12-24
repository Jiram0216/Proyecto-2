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
            <img src="{{url('/images/L01_1.PNG')}}" alt="Laser L02" class="producto__imagen mt-3">
            <p class="maquina__texto mt-2">
                El corte con láser es una técnica empleada para cortar piezas de chapa caracterizada en que su fuente de
                energía es un láser que concentra luz en la superficie de trabajo. Para poder evacuar el material
                cortado es necesario el aporte de un gas a presión como por ejemplo oxígeno, nitrógeno o argón. Es
                especialmente adecuado para el corte previo y para el recorte de material sobrante pudiendo desarrollar
                contornos complicados en las piezas. Entre las principales ventajas de este tipo de fabricación de
                piezas se puede mencionar que no es necesario disponer de matrices de corte y permite efectuar ajustes
                de silueta. También entre sus ventajas se puede mencionar que el accionamiento es robotizado para poder
                mantener constante la distancia entre el electrodo y la superficie exterior de la pieza.
            </p>
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo">Caracteristicas</h2>
            </div>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold">1.-Marca: G-WEIKE</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">2.-Modelo: LF3015L No.
                    Serie 32773</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">3.-Mesa: 1.50 x 3.0 mts
                </li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">4.-Calibre: 1/2", 1/4", 6/16" y 7/16"</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercase font-weight-bold">5.-Voltaje: 1000W / 220 Volts
                </li>
            </ul>
        </aside>
        <article class="maquina">
            <div class="padre">
                <h2 class="hijo">Componentes</h2>
            </div>
            <img src="{{url('/images/L01_1.PNG')}}" alt="Laser L02" class="producto__imagen mt-3">
            <div class="container">
                <div class="collapse" id="uno">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Fuente de Alimentación Láser:</h3>
                        <p>Proporciona energía para el láser de fibra. Es de 500 W y se instala en la caja de control de
                            la máquina</p>
                    </div>
                </div>
                <div class="collapse" id="dos">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Fuente de Fibra Láser:</h3>
                        <p>
                            Se llama LASER por las siglas en inglés (Amplificación de luz por emisión estimulada de
                            radiación) y se agrega "fibra" porque el medio de conseguir la amplificación es la fibra
                            óptica modificada y tratada técnicamente (dopada) para obtener el resultado necesario. Tiene
                            una larga vida útil y se suele instalar en la carcasa (mesa, parte inferior) de la máquina.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="tres">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Sistema de Control CNC:</h3>
                        <p>
                            Es el CPU de la máquina; el hardware. Al igual que una impresora normal, que tiene una placa
                            madre, esta placa, independiente del PC incluido, controla la máquina para realizar el
                            marcado.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="cuatro">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Mesa de Trabajo:</h3>
                        <p>
                            El lugar donde colocamos las placas o láminas de acero y marcamos. Podemos ajustar los ejes
                            X e Y para mover la mesa de trabajo, podemos mover las cosas sin manos con unas roscas. El
                            eje Z es ajustable. Por lo tanto, es más fácil para marcar cosas pequeñas y puede ayudar,
                            marcando con mayor precisión.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="cinco">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Escáner Láser:</h3>
                        <p>
                            Puede controlar la desviación del haz en una superficie plana y es parte necesaria de la
                            máquina.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="seis">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">La Lente:</h3>
                        <p>
                            La función de la lente es enfocar el haz de rayos en un punto, punto de corte o grabado. Y
                            también es una parte fundamental de la máquina.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="siete">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Sistema de Refirgeración por aire, o por agua:</h3>
                        <p>
                            La máquina produce calor mientras trabaja, por lo que necesitamos enfriadores de agua. Para
                            las máquinas con lámparas de CO2, se utiliza un sistema de refrigeración por agua y al
                            equipo de bombeo que hace circular el agua se le llama chiller.
                        </p>
                    </div>
                </div>
                <div class="collapse" id="ocho">
                    <div class="well">
                        <h3 class="titulo-categoria text-uppercase">Purificador de aire:</h3>
                        <p>
                            En caso de necesitar aire para operar la láser, se debe encender el purificador, también se
                            debe abrir la llave de paso del agua. El agua debe ser destilada.
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
                    data-toggle="collapse">1.-Fuente de Alimentación Láser</a>
                <a href="#dos" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">2.-Fuente de Fibra Láser</a>
                <a href="#tres" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">3.-Sistema de Control CNC</a>
                <a href="#cuatro" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">4.-Mesa de Trabajo</a>
                <a href="#cinco" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">5.-Escáner Láser</a>
                <a href="#sies" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">6.-La Lente</a>
                <a href="#siete" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">7.-Sistema de Refirgeración por aire, o por agua</a>
                <a href="#tres" class="btn btn-outline-dark btn-block mt-3 text-uppercase font-weight-bold"
                    data-toggle="collapse">8.-Purificador de aire.</a>
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