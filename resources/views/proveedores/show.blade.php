{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
{{-- Cargando hoja de estilos de trix editor mediante @section y endsection --}}
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"
    integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
{{-- Agregando contenido en botones mediante @section y @endsection --}}
@section('botones')
<a href="{{route('proveedores.index')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
    </svg>
    Regresar
</a>
@endsection
{{-- Agregando mi contendido en senction mediante @section y @endsection --}}
@section('content')
<div class="grid2">
    <article class="contenido-receta">
        <h2 class="text-center mb-4 bg-primary text-white">Visualización del proveedor</h2>
        <div class="receta-meta p-3">
            <p class="float-right">
                <span class="font-weight-bold text-info lead">Folio:  </span>
                {{$proveedor->id}}
            </p>
            <p class="">
                <span class="font-weight-bold text-info lead">Empresa: </span>
                {{$proveedor->empresa}}
            </p>
            <p>
                <span class="font-weight-bold text-info lead">Categoria del Proveedor: </span>
                {{$proveedor->categoria->nombre}}
            </p>
            <p>
                <span class="font-weight-bold text-info lead">Concato del Proveedor: </span>
                {{$proveedor->contacto}}
            </p>
            <p>
                <span class="font-weight-bold text-info lead">Correo Electronico del Proveedor: </span>
                {{$proveedor->correo}}
            </p>
            <p>
                <span class="font-weight-bold text-info lead">Telefono del Proveedor: </span>
                {{$proveedor->telefono}}
            </p>
            <div class="mb-5">
                {{-- Fecha --}}
                <p class="float-right">
                    @php
                    $fecha = $proveedor->created_at
                    @endphp
                    <span class="font-weight-bold text-info ">Fecha de Creación: </span>
                    <fecha-orden fecha="{{$fecha}}"></fecha-orden>
                </p>
            </div>
        </div>
    </article>
    <aside>
        <h2 class="text-center mb-4 bg-primary text-white">Logotipo</h2>
        {{-- <img src="{{url('/images/img5.jpg')}}" class="producto__imagen"> --}}
        <img src="/storage/{{$proveedor->imagen}}" alt="Logo de la empresa" class="producto__imagen ">
    </aside>
</div>
@endsection
{{-- Cargando scripts de trix editor mediante @section y endsection --}}
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"
    integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
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
                <a class="btn btn-outline-light mt-2 text-uppercsae font-weight-bold" href="{{route('vistaorden.proveedor')}}">
                    <h2>Regresar</h2>
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