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