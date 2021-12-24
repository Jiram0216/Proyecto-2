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
                    <img src="{{url('/images/img1.jpg')}}" alt="Proyectos">
                </a>
            </article>
            <article class="producto">
                <a href="{{route('maquinas.nave2')}}">
                    <div class="padre">
                        <h2 class="hijo">Nave 2</h2>
                    </div>
                    <img src="{{url('/images/img2.jpg')}}" alt="Proyectos">
                </a>
            </article>
            <Article class="producto">
                <a href="{{route('maquinas.nave3')}}">
                    <div class="padre">
                        <h2 class="hijo">Nave 3</h2>
                    </div>
                    <img src="{{url('/images/img3.jpg')}}" alt="Proyectos">
                </a>
            </Article>
        </div>
    </div>
    <div class="grid2">
        <article>
            <div class="padre">
                <h2 id="layout" class="hijo mt-3">Layout</h2>
            </div>
            <img src="{{url('/images/img1.jpg')}}" alt="Troquel T01" class="producto__imagen">
        </article>
        <aside class="asidebar1">
            <div class="padre">
                <h2 class="hijo mt-3">Indice</h2>
            </div>
            <nav class="enlaces">
                <div><a href="#fresadora"
                        class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">01. Fresadora</a>
                </div>
                <div><a href="#rectificadora"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">02.
                        Rectificadora</a></div>
                <div><a href="#sierraCinta"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">03. Sierra
                        Cinta</a></div>
                <div><a href="#grabadoraLaser"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">04. Grabadora
                        Laser</a></div>
                <div><a href="#soldadoraLaser"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">05. Soldadora
                        Laser</a></div>
                <div><a href="#roladora"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">06.
                        Roladora</a></div>
                <div><a href="#compresor"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">07.
                        Compresor</a></div>
                <div><a href="#robot"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">08. Robot</a>
                </div>
                <div><a href="#torno"
                        class="btn btn-outline-dark btn-block mr-2 mt-1 text-uppercsae font-weight-bold">09. Torno</a>
                </div>
            </nav>
        </aside>
    </div>
    <!--contenido--principal grid2-->
    <div class="padre">
        <h2 id="fresadora" class="hijo mt-3">Fresadora</h2>
    </div>
    <div class="grid3">
        <article class="producto">
            <a href="fresadora1.html"> <img class="producto__imagen" src="{{url('/images/Nav1.jpg')}}" alt="Fresadora F01"> </a>
            <div class="producto__informacion">
                <p class="producto__nombre">Fresadora F01</p>
            </div>
        </article>
        <!--producto-->
        <article class="producto">
            <a href="fresadora2.html"> <img class="producto__imagen" src="{{url('/images/Nav2.jpg')}}" alt="Fresadora F02"> </a>
            <div class="producto__informacion">
                <p class="producto__nombre">Fresadora F02</p>
            </div>
        </article>
        <!--producto-->
    </div>
    <!--grid3-->
    <nav>
        <div><a href="#layout" class="btn btn-outline-dark mr-2 text-uppercsae font-weight-bold">indice</a></div>
    </nav>
    <div class="padre">
        <h2 id="rectificadora" class="hijo mt-3">Rectificadora</h2>
    </div>
    <div class="grid3">
        <article class="producto">
            <a href="rectificadora1.html"> <img class="producto__imagen" src="{{url('/images/Nav3.jpg')}}" alt="Rectificadora RE01">
            </a>
            <div class="producto__informacion">
                <p class="producto__nombre">Rectificadora RE01</p>
            </div>
        </article>
        <!--producto-->
    </div>
    <!--grid3-->
    <nav>
        <div><a href="#layout" class="btn btn-outline-dark mr-2 text-uppercsae font-weight-bold">indice</a></div>
    </nav>
    <div class="padre">
        <h2 id="sierraCinta" class="hijo mt-3">Sierra Cinta</h2>
    </div>
    
    <div class="grid3">
        <article class="producto">
            <a href="sierraCinta1.html"> <img class="producto__imagen" src="{{url('/images/Nav2.jpg')}}" alt="Sierra Cinta SC01"> </a>
            <div class="producto__informacion">
                <p class="producto__nombre">Sierra Cinta SC01</p>
            </div>
        </article>
        <!--producto-->
    </div>
    <!--grid3-->
    <nav>
        <div><a href="#layout" class="btn btn-outline-dark mr-2 text-uppercsae font-weight-bold">indice</a></div>
    </nav>
    <div class="padre">
        <h2 id="grabadoraLaser" class="hijo mt-3">Grabadora Laser</h2>
    </div>
    <div class="grid3">
        <article class="producto">
            <a href="grabadoraLaser1.html"> <img class="producto__imagen" src="{{url('/images/Nav2.jpg')}}" alt="Grabadora Laser GL01">
            </a>
            <div class="producto__informacion">
                <p class="producto__nombre">Grabadora Laser GL01</p>
            </div>
        </article>
        <!--producto-->
    </div>
    <!--grid3-->
    <nav>
        <div><a href="#layout" class="btn btn-outline-dark mr-2 text-uppercsae font-weight-bold">indice</a></div>
    </nav>
    <div class="padre">
        <h2 id="soldadoraLaser" class="hijo mt-3">Soldadora Laser</h2>
    </div>
    <div class="grid3">
        <article class="producto">
            <a href="soldadoraLaser1.html"> <img class="producto__imagen" src="{{url('/images/Nav2.jpg')}}"
                    alt="Soldadora Laser SOL01"> </a>
            <div class="producto__informacion">
                <p class="producto__nombre">Soldadora Laser SOL01</p>
            </div>
        </article>
        <!--producto-->
    </div>
    <!--grid3-->
    <nav>
        <div><a href="#layout" class="btn btn-outline-dark mr-2 text-uppercsae font-weight-bold">indice</a></div>
    </nav>
    <div class="padre">
        <h2 id="roladora" class="hijo mt-3">Roladora</h2>
    </div>
    <div class="grid3">
        <article class="producto">
            <a href="roladora5.html"> <img class="producto__imagen" src="{{url('/images/Nav2.jpg')}}" alt="Roladora R05"> </a>
            <div class="producto__informacion">
                <p class="producto__nombre">Roladora R05</p>
            </div>
        </article>
        <!--producto-->
    </div>
    <!--grid3-->
    <nav>
        <div><a href="#layout" class="btn btn-outline-dark mr-2 text-uppercsae font-weight-bold">indice</a></div>
    </nav>
    <div class="padre">
        <h2 id="compresor" class="hijo mt-3">Compresor</h2>
    </div>
    <div class="grid3">
        <article class="producto">
            <a href="compresor3.html"> <img class="producto__imagen" src="{{url('/images/Nav2.jpg')}}" alt="Compresor C3"> </a>
            <div class="producto__informacion">
                <p class="producto__nombre">Compresor C3</p>
            </div>
        </article>
        <!--producto-->
        <article class="producto">
            <a href="compresor4.html"> <img class="producto__imagen" src="{{url('/images/Nav2.jpg')}}" alt="Compresor C4"> </a>
            <div class="producto__informacion">
                <p class="producto__nombre">Compresor C4</p>
            </div>
        </article>
        <!--producto-->
    </div>
    <!--grid3-->
    <nav>
        <div><a href="#layout" class="btn btn-outline-dark mr-2 text-uppercsae font-weight-bold">indice</a></div>
    </nav>
    <div class="padre">
        <h2 id="robot" class="hijo mt-3">Robot</h2>
    </div>
    <div class="grid3">
        <article class="producto">
            <a href="robot1.html"> <img class="producto__imagen" src="{{url('/images/Nav2.jpg')}}" alt="Robot R01"> </a>
            <div class="producto__informacion">
                <p class="producto__nombre">Robot RB01</p>
            </div>
        </article>
        <!--producto-->
    </div>
    <!--grid3-->
    <nav>
        <div><a href="#layout" class="btn btn-outline-dark mr-2 text-uppercsae font-weight-bold">indice</a></div>
    </nav>
    <div class="padre">
        <h2 id="torno" class="hijo mt-3">Torno</h2>
    </div>
    <div class="grid3">
        <article class="producto">
            <a href="torno1.html"> <img class="producto__imagen" src="{{url('/images/Nav2.jpg')}}" alt="Torno TO01"> </a>
            <div class="producto__informacion">
                <p class="producto__nombre">Torno TO01</p>
            </div>
        </article>
        <!--producto-->
    </div>
    <!--grid3-->
    <nav>
        <div><a href="#layout" class="btn btn-outline-dark mr-2 text-uppercsae font-weight-bold">indice</a></div>
    </nav>
</main>
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
                    <h2>Regresar al menu</h2>
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