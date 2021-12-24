{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
{{-- Agregando contenido en botones mediante @section y @endsection --}}
@section('botones')
<a href="{{route('menu.index')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
    <svg class="icono6 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
    </svg>
    Regresar
</a>
<a href="{{route('perfiles.edit', ['perfil'=> Auth::user()->id])}}"
    class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
        </path>
    </svg>
    Editar Perfil
</a>
@endsection
{{-- Agregando mi contendido en content mediante @section y @endsection --}}
@section('content')
<div class="container">
    <div class="row">
        {{-- Imagen de perfil --}}
        <div class="col-md-5">
            @if($perfil->imagen)
            <img src="/storage/{{$perfil->imagen}}" class="w-100 rounded-circle" alt="Imagen del usuario">
            @endif
        </div>
        {{-- Imformacion de usuario --}}
        <div class="col-md-5 mt-4">
            <h2 class="text-center mb-2 text-primary">{{$perfil->usuario->name}}</h2>
            <h3 class="text-center mb-2 mt-4">Biografía:</h3>
            <p>{!!$perfil->biografia!!}</p>
        </div>
    </div>
</div>
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
                    <a href="{{route('menu.index')}}"
                        class="btn btn-outline-info mr-2 text-uppercase font-weight-bold">Registrate!</a>
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