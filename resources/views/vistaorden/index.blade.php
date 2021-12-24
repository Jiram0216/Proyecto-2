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
    <form action="{{ route('buscar.show')}}" class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-md-4 texto-buscar">
                <p class="display-4">Encuentra la Orden de Trabajo que buscas:</p>
                <input type="search" name="buscar" class="form-control" placeholder="Buscar Orden de Trabajo">
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
    <h2 class="titulo-categoria text-uppercasemt-5">Últimas Órdenes de trabajo</h2>
    <div class="owl-carousel owl-theme">
        @foreach($nuevas as $nueva)
        <div class="card">
            {{-- <img src="/storage/{{$nueva->imagen}}" alt="Imagen Orden de trabajo" class="card-img-top "> --}}
            <div class="card-body">
                {{-- Folio --}}
                <p>
                    <span class="font-weight-bold text-primary">Folio: {{$nueva->id + 1500}} </span>
                </p>
                {{-- Nombre de la maquina --}}
                <h3>{{$nueva->maquina}}</h3>
                {{-- tipo de trabajo --}}
                <p class="text-center">
                    <span class="font-weight-bold text-primary">Tipo de Trabajo: </span>
                    {{$nueva->trabajo}}
                </p>
                {{-- Categorias de mantenimiento --}}
                <p class="text-center">
                    <span class="font-weight-bold text-primary">Tipo de Mantenimiento: </span>
                    {{$nueva->categorias->nombre}}
                </p>
                {{-- Horas de paro --}}
                <p class="text-center">
                    <span class="font-weight-bold text-primary">Total de horas de paro: </span>
                    {{$nueva->horas}}
                </p>
                {{-- Monto --}}
                <p class="text-center">
                    <span class="font-weight-bold text-primary">Monto: $
                        {{$nueva->monto}}
                    </span>
                </p>
                {{-- Fecha --}}
                <p>
                    @php
                    $fecha = $nueva->created_at
                    @endphp
                    <span class="font-weight-bold fecha text-secondary float-right">Fecha:
                        <fecha-orden fecha="{{$fecha}}"></fecha-orden>
                    </span>
                </p>
                {{-- Boton para ver la orden --}}
                <a href="{{route('ordentrabajo.show', $nueva->id) }}"
                    class="btn btn-primary d-block font-weight-bold text-uppercase">
                    Ver Orden
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{-- Imprimeindo las recertas por categoria --}}
@foreach($ordenes as $key => $grupo)
<div class="container">
    {{-- Titulo de la categoria --}}
    <h2 class="titulo-categoria text-uppercase mt-5 mb-4">{{ str_replace('-', ' ', $key) }}</h2>
    <div class="row">
        @foreach($grupo as $ordenes)
        @foreach($ordenes as $orden)
        @include('ui.orden')
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