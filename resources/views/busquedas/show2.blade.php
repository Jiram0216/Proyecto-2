{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
{{-- Agregando contenido en botones mediante @section y @endsection --}}
@section('botones')
<a href="{{route('vistaorden.proveedor')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
    </svg>
    Regresar
</a>
@endsection
{{-- Agregando mi contendido en senction mediante @section y @endsection --}}
@section('content')
<div class="container">
    <h2 class="titulo-categoria mt-5 mb-4">Resultado de la búsqueda:</h2>
    <div class="row">
        @foreach ($ordenes as $orden)
        <div class="col-md-4 mt-4">
            <div class="card shadow">
                {{-- <img class="card-img-top" src="/storage/{{$orden->imagen}}" alt="imagen de la orden de trabajo">
                --}}
                <div class="card-body">
                    {{-- Folio --}}
                    <p>
                        <span class="font-weight-bold text-primary float-left">Folio: {{$orden->id}} </span>
                    </p>
                    {{-- Nombre de la maquina --}}
                    <h3>Empresa: {{$orden->empresa}}</h3>
                    {{-- Contacto --}}
                    <p class="text-center">
                        <span class="font-weight-bold fecha lead">Concato: </span>
                        {{$orden->contacto}}
                    </p>
                    {{-- Telefono --}}
                    <p class="text-center">
                        <span class="font-weight-bold fecha lead">Telefono: </span>
                        {{$orden->telefono}}
                    </p>
                    {{-- Correo electronico --}}
                    <p class="text-center">
                        <span class="font-weight-bold fecha lead">Correo Electronico: </span>
                        {{$orden->correo}}
                    </p>
                    {{-- Fecha
                    <p>
                        @php
                        $fecha = $orden->created_at
                        @endphp
                        <span class="font-weight-bold fecha  float-left">Fecha:
                            <fecha-orden fecha="{{$fecha}}"></fecha-orden>
                        </span>
                    </p> --}}
                    {{-- Boton para ver la orden --}}
                    <a href="{{route('proveedores.show', $orden->id) }}"
                        class="btn btn-primary d-block font-weight-bold text-uppercase">
                        Ver Proveedor
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{$ordenes->links()}}
    </div>
</div>
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