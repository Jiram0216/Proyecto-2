{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
@section('styles')
{{-- Owl-Carousel --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('hero')
<div class="hero-categorias">
    <form action="{{ route('busquedas.show2')}}" class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-md-4 texto-buscar">
                <p class="display-4">Encuentra el proveedor que buscas:</p>
                <input type="search" name="buscar" class="form-control" placeholder="Busca el proveedor">
            </div>
        </div>
    </form>
</div>
@endsection
{{-- Agregando contenido en botones mediante @section y @endsection --}}
@section('botones')
<a href="{{route('menu.index')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
    </svg>
    Regresar
</a>
@endsection
{{-- Agregando mi contendido en senction mediante @section y @endsection --}}
@section('content')
<div class="container ">
    <h2 class="titulo-categoria text-uppercasemt-5">Ultimos Proveedores</h2>
    <div class="owl-carousel owl-theme">
        @foreach($nuevas as $nueva)
        <div class="card">
            <div class="card-body">
                <p>
                    <span class="font-weight-bold text-primary float-left">Folio: {{$nueva->id}} </span>
                </p>
                {{-- Nombre de la maquina --}}
                <h3>Empresa: {{$nueva->empresa}}</h3>
                <p class="text-center">
                    <span class="font-weight-bold fecha lead">Concato: </span>
                    {{$nueva->contacto}}
                </p>
                <p class="text-center">
                    <span class="font-weight-bold fecha lead">Telefono: </span>
                    {{$nueva->telefono}}
                </p>
                <p class="text-center">
                    <span class="font-weight-bold fecha lead">Correo Electronico: </span>
                    {{$nueva->correo}}
                </p>
                {{-- Fecha
                <p>
                    @php
                    $fecha = $nueva->created_at
                    @endphp
                    <span class="font-weight-bold fecha  float-left">Fecha:
                        <fecha-orden fecha="{{$fecha}}"></fecha-orden>
                    </span>
                </p> --}}
                {{-- Folio --}}
                
                {{-- Boton para ver la orden --}}
                <a href="{{route('proveedores.show', $nueva->id) }}"
                    class="btn btn-primary d-block font-weight-bold text-uppercase">
                    Ver Proveedor
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{-- Imprimeindo las recertas por categoria --}}
@foreach($proveedores as $key => $grupo)
<div class="container">
    {{-- Titulo de la categoria --}}
    <h2 class="titulo-categoria text-uppercase mt-5 mb-4">{{ str_replace('-', ' ', $key) }}</h2>
    <div class="row">
        @foreach($grupo as $proveedores)
        @foreach($proveedores as $proveedor)
        @include('ui.proveedores')
        @endforeach
        @endforeach
    </div>
</div>
@endforeach
@endsection
{{-- Creando el footer --}}
@section('footer')
<section class="">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #002655;">
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