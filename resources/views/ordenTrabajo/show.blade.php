{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
{{-- Agregando contenido en botones mediante @section y @endsection --}}
@section('botones')
<a href="{{route('ordentrabajo.index')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
    </svg>
    Regresar
</a>
@endsection
{{-- Agregando mi contendido en content mediante @section y @endsection --}}
@section('content')
<article class="producto p-5">
    <div class="padre">
        <h2 class="hijo">Orden de Trabajo para Mantenimiento</h2>
    </div>
    <div class="grid1">
        <div>
            {{-- Folio --}}
            <p>
                <span class="font-weight-bold text-primary float-right grande">Folio: {{$ordenTrabajo->id + 1500}} </span>
            </p>
        </div>
        <div>
            {{-- Fecha --}}
            <p>
                @php
                $fecha = $ordenTrabajo->created_at
                @endphp
                <span class="font-weight-bold text-primary float-right">Fecha:
                    <fecha-orden fecha="{{$fecha}}"></fecha-orden>
                </span>
            </p>
        </div>
    </div>


    <div class="grid3 mt-3">
        <article class="">
            {{-- Máquina --}}
            <p class="text-center">
                <span class="font-weight-bold text-primary">Máquina: </span>
                {{$ordenTrabajo->maquina}}
            </p>
        </article>
        <article class="">
            {{-- Área --}}
            <p class="text-center">
                <span class="font-weight-bold text-primary">Área: </span>
                {{$ordenTrabajo->area}}
            </p>
        </article>
        <article class="">
            {{-- Usuario --}}
            <p class="text-center">
                <span class="font-weight-bold text-primary">Usuario: </span>
                {{$ordenTrabajo->autor->name}}
            </p>
        </article>
    </div>
    <div class="grid1">
        <div>
            <h5 class="text-center font-weight-bold">Tipo de mantenimiento:</h5>
            {{-- Categoria --}}
            <p class="text-center">
                {{-- <span class="font-weight-bold text-primary">Tipo de Mantenimiento: </span> --}}
                {{$ordenTrabajo->categorias->nombre}}
            </p>
        </div>
    </div>
    <div class="grid1">
        <div>
            <h5 class="text-center font-weight-bold">Tiempo de trabajo:</h5>
            {{-- Tipo de trabajo --}}
            <p class="text-center">
                {{-- <span class="font-weight-bold text-primary">Tipo de Trabajo: </span> --}}
                {{$ordenTrabajo->trabajo}}
            </p>
        </div>
    </div>
    <div class="grid1">
        <div>
            <h5 class="text-center font-weight-bold">Desglose de tiempos:</h5>
            <p class="text-center">
                {{-- <span class="font-weight-bold text-primary">Tipo de Trabajo: </span> --}}

                Total de horas de paro: {{$ordenTrabajo->horas}}
            </p>
        </div>
    </div>
    <div class="grid4">
        <article class="text-center">
            <span class="font-weight-bold text-primary text-center">Descripción: </span>
        </article>
        <article>
            <p>
                {!!$ordenTrabajo->descripcion!!}
            </p>
        </article>
    </div>
    <div class="grid4">
        <article class="text-center">
            <span class="font-weight-bold text-primary">Causa: </span>
        </article>
        <article>
            {{-- Causa --}}
            <p>
                {!!$ordenTrabajo->causa!!}
            </p>
        </article>
    </div>
    <div class="grid4">
        <article class="text-center">
            <span class="font-weight-bold text-primary">Solución: </span>
        </article>
        <article>
            {{-- Solucion --}}
            <p>
                {!!$ordenTrabajo->solucion!!}
            </p>
        </article>
    </div>
    <div class="grid4">
        <article class="text-center">
            <span class="font-weight-bold text-primary">Observaciones: </span>
        </article>
        <article>
            {{-- Solucion --}}
            <p>
                {!!$ordenTrabajo->observaciones!!}
            </p>
        </article>
    </div>
    <div class="grid1">
        <div>
            {{-- Monto --}}
            <p>
                <span class="font-weight-bold text-primary float-right">Monto: $
                    {{$ordenTrabajo->monto}}
                </span>
            </p>
        </div>
    </div>
    <div class="grid1">
        <div>
            {{-- Fecha de conclucion --}}
            <p>
                <span class="font-weight-bold text-primary float-right">Fecha de conclusión:
                    {{$ordenTrabajo->fecha}}
                </span>
            </p>
        </div>
    </div>
</article>
{{-- <div class="grid1"> --}}
    {{-- Imagen --}}
    {{-- <span class="font-weight-bold text-primary">Imagen: </span>
    <div class="imagen-receta text-center">
        <img src="/storage/{{$ordenTrabajo->imagen}}" alt="imagen de la maquina" class="w-50">
    </div> --}}
    {{--
</div> --}}
@endsection
{{-- Creando el footer --}}
@section('footer')
<section class="">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #002655;">
        <!-- Grid container -->
        {{-- <div class="container p-4 pb-0">
            <!-- Section: CTA -->
            <section class="">
                <p class="d-flex justify-content-center align-items-center">
                    <span class="me-3 text-uppercase font-weight-bold">Inicia Sesion</span>
                    <a href="{{route('menu.index')}}" class="btn btn-outline-info mr-2 text-uppercase font-weight-bold">Registrate!</a>
                </p>
            </section>
            <!-- Section: CTA -->
        </div> --}}
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