{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
{{-- Owl-Carousel --}}
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
{{-- Agregando mi contendido en senction mediante @section y @endsection --}}
@section('content')

<main class="contenedor contenido--principal">
    <div class="">
        <div class="owl-carousel owl-theme">
            <article class="producto">
                <a href="{{route('maquinas.nave1')}}">
                    <div class="padre">
                        <h2 class="hijo">Nave 1</h2>
                    </div>
                    <img src="{{url('/images/img4.jpg')}}" alt="Proyectos">
                </a>
            </article>
            <article class="producto">
                <a href="{{route('maquinas.nave2')}}">
                    <div class="padre">
                        <h2 class="hijo">Nave 2</h2>
                    </div>
                    <img src="{{url('/images/img5.jpg')}}" alt="Proyectos">
                </a>
            </article>
            <Article class="producto">
                <a href="{{route('maquinas.nave3')}}">
                    <div class="padre">
                        <h2 class="hijo">Nave 3</h2>
                    </div>
                    <img src="{{url('/images/img6.jpg')}}" alt="Proyectos">
                </a>
            </Article>
        </div>
    </div>
    <div class="grid2">
        <article>
            <div class="padre">
                <h2 id="layout" class="hijo mt-3">Layout</h2>
            </div>
            <img src="{{url('/images/LN1.PNG')}}" alt="Layout Nave 1" class="producto__imagen">
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo mt-3">Indice</h2>
            </div>
            <nav class="enlaces">
                <div><a href="#troqueles"
                        class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">01. Troqueles</a>
                </div>
                <div><a href="#prensas"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">02. Prensas</a>
                </div>
                <div><a href="#sierras"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">03. Sierras</a>
                </div>
                <div><a href="#guillotinas"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">04.
                        Guillotinas</a></div>
                <div><a href="#roladoras"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">05.
                        Roladoras</a></div>
                <div><a href="#laser"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">06. Laser</a>
                </div>
                <div><a href="#compresor"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">07.
                        Compresor</a></div>
                <div><a href="#selladora"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">08.
                        Selladora</a></div>
                <div><a href="#transformador"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">09.
                        Transformador</a></div>
            </nav>
        </aside>
    </div>
    <!--contenido--principal grid2-->
    <div>
        <div class="padre">
            <h2 id="troqueles" class="hijo mt-3">Troqueles</h2>
        </div>
        <div class="grid3">
            <article class="producto">
                <a href="{{route('maquinas.troquel1')}}"> <img class="producto__imagen"
                        src="{{url('/images/T01_1.png')}}" alt="Troquel T01"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">T01</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.troquel2')}}"> <img class="producto__imagen"
                        src="{{url('/images/T02_1.png')}}" alt="Troquel T02"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">T02</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.troquel3')}}"> <img class="producto__imagen"
                        src="{{url('/images/T03_1.png')}}" alt="Troquel T03"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">T03</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.troquel4')}}"> <img class="producto__imagen"
                        src="{{url('/images/T04_1.png')}}" alt="Troquel T04"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">T04</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.troquel5')}}"> <img class="producto__imagen"
                        src="{{url('/images/T05_1.png')}}" alt="Troquel T05"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">T05</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.troquel6')}}"> <img class="producto__imagen"
                        src="{{url('/images/T06_1.png')}}" alt="Troquel T06"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">T06</p>
                </div>
            </article>
            <!--producto-->
        </div>
        <!--grid3-->
        <nav>
            <div>
                <a href="#layout" class="btn btn-outline-dark btn-lg text-uppercsae font-weight-bold">
                    Indice
                </a>
            </div>
        </nav>
        <div class="padre">
            <h2 id="prensas" class="hijo mt-3">Prensas</h2>
        </div>
        <div class="grid3">
            <article class="producto">
                <a href="{{route('maquinas.prensa1')}}"> <img class="producto__imagen"
                        src="{{url('/images/P01_1.png')}}" alt="Prensa P01"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">P01</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.prensa2')}}"> <img class="producto__imagen"
                        src="{{url('/images/P02_1.png')}}" alt="Prensa P02"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">P02</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.prensa3')}}"> <img class="producto__imagen"
                        src="{{url('/images/P03_1.png')}}" alt="Prensa P03"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">P03</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.prensa4')}}"> <img class="producto__imagen"
                        src="{{url('/images/P04_1.png')}}" alt="Prensa P04"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">P04</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.prensa5')}}"> <img class="producto__imagen"
                        src="{{url('/images/P05_1.png')}}" alt="Prensa P05"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">P05</p>
                </div>
            </article>
            <!--producto-->
        </div>
        <!--grid3-->
        <div>
            <a href="#layout" class="btn btn-outline-dark btn-lg mt-2 text-uppercsae font-weight-bold">
                Indice
            </a>
        </div>
        <div class="padre">
            <h2 id="sierras" class="hijo mt-3">Sierras</h2>
        </div>
        <div class="grid3">
            <article class="producto">
                <a href="{{route('maquinas.sierra1')}}"> <img class="producto__imagen"
                        src="{{url('/images/S01_1.png')}}" alt="Sierra S01"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">S01</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.sierra2')}}"> <img class="producto__imagen"
                        src="{{url('/images/S02_1.png')}}" alt="Sierra S02"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">S02</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.sierra3')}}"> <img class="producto__imagen" src="{{url('/images/Nav3.jpg')}}"
                        alt="Sierra S03"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">S03</p>
                </div>
            </article>
            <!--producto-->
        </div>
        <!--grid3-->
        <div>
            <a href="#layout" class="btn btn-outline-dark btn-lg mt-2 text-uppercsae font-weight-bold">
                Indice
            </a>
        </div>
        <div class="padre">
            <h2 id="guillotinas" class="hijo mt-3">Guillotinas</h2>
        </div>
        <div class="grid3">
            <article class="producto">
                <a href="{{route('maquinas.guillotinas1')}}"> <img class="producto__imagen"
                        src="{{url('/images/G01_1.png')}}" alt="Guillotina G01"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">G01</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.guillotinas2')}}"> <img class="producto__imagen"
                        src="{{url('/images/G02_1.png')}}" alt="Guillotina G02"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">G02</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.guillotinas3')}}"> <img class="producto__imagen"
                        src="{{url('/images/G03_1.PNG')}}" alt="Guillotina G03"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">G03</p>
                </div>
            </article>
            <!--producto-->
        </div>
        <!--grid3-->
        <div>
            <a href="#layout" class="btn btn-outline-dark btn-lg mt-2 text-uppercsae font-weight-bold">
                Indice
            </a>
        </div>
        <div class="padre">
            <h2 id="roladoras" class="hijo mt-3">Roladoras</h2>
        </div>
        <div class="grid3">
            <article class="producto">
                <a href="{{route('maquinas.roladora1')}}"> <img class="producto__imagen"
                        src="{{url('/images/R01_1.PNG')}}" alt="Roladora 01"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">R01</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.roladora2')}}"> <img class="producto__imagen"
                        src="{{url('/images/R01_1.PNG')}}" alt="Roladora 02"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">R02</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.roladora3')}}"> <img class="producto__imagen"
                        src="{{url('/images/Nav3.jpg')}}" alt="Roladora tee de Soporte RTS"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">Tee de Soporte RTS</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.roladora4')}}"> <img class="producto__imagen"
                        src="{{url('/images/CUV1_01.PNG')}}" alt="Curvatron CV"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">Curvatron CV</p>
                </div>
            </article>
            <!--producto-->
        </div>
        <!--grid3-->
        <div>
            <a href="#layout" class="btn btn-outline-dark btn-lg mt-2 text-uppercsae font-weight-bold">
                Indice
            </a>
        </div>
        <div class="padre">
            <h2 id="laser" class="hijo mt-3">Laser</h2>
        </div>
        <div class="grid3">
            <article class="producto">
                <a href="{{route('maquinas.laser1')}}"> <img class="producto__imagen" src="{{url('/images/L01_1.PNG')}}"
                        alt="Laser L01"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">L01</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.laser2')}}"> <img class="producto__imagen" src="{{url('/images/L01_1.PNG')}}"
                        alt="Laser L02"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">L02</p>
                </div>
            </article>
            <!--producto-->
        </div>
        <!--grid3-->
        <div>
            <a href="#layout" class="btn btn-outline-dark btn-lg mt-2 text-uppercsae font-weight-bold">
                Indice
            </a>
        </div>
        <div class="padre">
            <h2 id="compresor" class="hijo mt-3">Compresor</h2>
        </div>
        <div class="grid3">
            <article class="producto">
                <a href="{{route('maquinas.compresor1')}}"> <img class="producto__imagen"
                        src="{{url('/images/COMP1_01.PNG')}}" alt="Compresor C1"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">C1</p>
                </div>
            </article>
            <!--producto-->
            <article class="producto">
                <a href="{{route('maquinas.compresor2')}}"> <img class="producto__imagen"
                        src="{{url('/images/COMP2_01.PNG')}}" alt="Compresor C2"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">C2</p>
                </div>
            </article>
            <!--producto-->
        </div>
        <!--grid3-->
        <div> {{-- Boton para regresar el layout --}}
            <a href="#layout" class="btn btn-outline-dark btn-lg mt-2 text-uppercsae font-weight-bold">
                Indice
            </a>
        </div>
        <div class="padre">
            <h2 id="selladora" class="hijo mt-3">Selladora</h2>
        </div>
        <div class="grid3">
            <article class="producto">
                <a href="{{route('maquinas.selladora1')}}"> <img class="producto__imagen"
                        src="{{url('/images/TS-NS3000.PNG')}}" alt="Selladora TS-NS3000"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">TS-NS3000</p>
                </div>
            </article>
            <!--producto-->
        </div>
        <!--grid3-->
        <div> {{-- Boton para regresar el layout --}}
            <a href="#layout" class="btn btn-outline-dark btn-lg mt-2 text-uppercsae font-weight-bold">
                Indice
            </a>
        </div>
        <div class="padre">
            <h2 id="transformador" class="hijo mt-3">Transformador</h2>
        </div>
        <div class="grid3">
            <article class="producto">
                <a href="{{route('maquinas.transformador1')}}"> <img class="producto__imagen"
                        src="{{ url('/images/TRANFO1_01.PNG')}}" alt="Selladora TS-NS3000"> </a>
                <div class="producto__informacion">
                    <p class="producto__nombre">TRAFO01</p>
                </div>
            </article>
            <!--producto-->
        </div>
        <!--grid3-->
        <div>
            <a href="#layout" class="btn btn-outline-dark btn-lg mt-2 text-uppercsae font-weight-bold">
                Indice
            </a>
        </div>
        {{-- <nav>
            <div><a href="#layout" class="boton boton--secundario">indice</a></div>
        </nav> --}}
    </div>
</main>
<!--Contenedor-->
@endsection
{{-- Creando el footer --}}
@section('footer')
<section class="">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #002655;">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: CTA -->
            <section class="">
                <a class="btn btn-outline-light mt-2 text-uppercsae font-weight-bold" href="{{route('menu.index')}}">
                    <h2>Regresar al menú</h2>
                </a>
            </section>
            <!-- Section: CTA -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Todos los derechos reservados:
            <a class="text-white" href="{{route('menu.index')}}">EQUIPOL, S.A. de C.V.</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</section>
@endsection
