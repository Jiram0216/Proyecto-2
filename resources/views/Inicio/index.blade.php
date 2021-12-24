{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
{{-- Owl-Carousel --}}
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
{{-- Seccion de botones --}}
{{-- @section('botones')
<a href="{{route('menu.index')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold float-right">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
    Menu
</a>
@endsection --}}
{{-- Agregando mi contendido en senction mediante @section y @endsection --}}
@section('content')
<main class="contenedor contenido--principal">
    <div>
        <div class="p-2">
            <div class="owl-carousel owl-theme">
                <img src="{{url('/images/img4.jpg')}}" alt="Proyectos">
                <img src="{{url('/images/img5.jpg')}}" alt="Proyectos">
                <img src="{{url('/images/img6.jpg')}}" alt="Proyectos">
                <img src="{{url('/images/img7.jpg')}}" alt="Proyectos">
                {{-- <img src="{{url('/images/Nav1.jpg')}}" alt="Proyectos">
                <img src="{{url('/images/Nav2.jpg')}}" alt="Proyectos">
                <img src="{{url('/images/Nav3.jpg')}}" alt="Proyectos"> --}}
            </div>
        </div>
    </div>
    <div class="grid5 producto mt-5">
        <article>
            <h2 id="layout" class="font-weight-bold fecha text-secondary">Personal calificado</h2>
            <div class="p-3">
                <img class="producto__imagen" src="{{url('/images/ISO.png')}}" alt="Proyectos">
            </div>
        </article>
        <aside class="asidebar1">
            <h3 class="font-weight-bold fecha text-dark">Perfil de la empresa:</h3>
            <div class="p-3">
                <p>
                    EQUIPOL, S.A. de C.V., es una empresa mexicana con 30 años de experiencia, líder en la manufactura
                    e
                    instalación de productos prefabricados para la iluminación natural y la ventilación de humos en
                    edificios metálicos.
                </p>
                <p>
                    Con un amplio portafolio de productos especializados, EQUIPOL, S.A. de C.V., cubre todas las
                    necesidades
                    de sus clientes ofreciendo soluciones llave en mano para crear sistemas all-in-one únicos en el
                    mercado
                    que complementan la seguridad de inventarios y edificios, con calidad y servicio inigualables.
                </p>
                <p>
                    Como empresa orientada a la calidad de sus productos y excelencia en el servicio, EQUIPOL, S.A. de
                    C.V.
                    cumple con los más exigentes requisitos de nuestros clientes en México con estándares de calidad
                    y
                    tecnología internacionales.
                </p>
                <p>
                    Nuestro personal de fabricación e instalación está capacitado y cuenta con una larga experiencia
                    y un
                    profundo conocimiento de las necesidades y regulaciones de la industria, lo que garantiza
                    proporcionar
                    asesoría a nuestro clientes para lograr la mejor solución a sus necesidades.
                </p>
            </div>
        </aside>
    </div>
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
                <p class="d-flex justify-content-center align-items-center">
                    <a href="{{route('menu.index')}}"
                        class="btn btn-outline-light text-uppercase font-weight-bold mr-2">Inicia Sesion</a>
                </p>
            </section>
            <!-- Section: CTA -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Todos los derechos reservados:
            <a class="text-white" href="{{route('inicio.index')}}">EQUIPOL, S.A. de C.V.</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</section>
@endsection