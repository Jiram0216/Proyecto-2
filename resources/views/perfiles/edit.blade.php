{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
{{-- Cargando hoja de estilos de trix editor mediante @section y endsection --}}
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"
    integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
{{-- Agregando contenido en botones mediante @section y @endsection --}}
@section('botones')
<a href="{{route('perfiles.show', ['perfil'=> $perfil->id])}}"
    class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
    </svg>
    Regresar
</a>
@endsection
{{-- Agregando mi contendido en content mediante @section y @endsection --}}
@section('content')
<div class="padre">
    <h2 class="hijo">Editar mi perfil</h2>
</div>
<div class="row justify-content-center mt-5">
    <div class="col-md-10 bg-white p-3">
        <form action="{{route('perfiles.update',['perfil' => $perfil->id])}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                {{-- Editar el nombre del usuario --}}
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre"
                    placeholder="Nombre del usuario" value="{{$perfil->usuario->name}}">
                @error('nombre')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Editar la Biografia del uauario --}}
                <label for="biografia">Biografía:</label>
                <input id="biografia" type="hidden" name="biografia" value="{{$perfil->biografia}}">
                {{-- Agregando trix editor a la Biografia del uauario --}}
                <trix-editor class=" @error('biografia') is-invalid @enderror" input="biografia"></trix-editor>
                @error('biografia')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Imagen del usuario --}}
                <label for="imagen">Tu Imagen de Perfil:</label>
                <input id="imagen" type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen">
                @if($perfil->imagen)
                <div class="mt-4">
                    <p>Imagen Actual:</p>
                    <img src="/storage/{{$perfil->imagen}}" style="width: 300px" alt="Imagen actual">
                </div>
                @error('imagen')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
                @endif
            </div>
            {{-- Boton para subir el formulario --}}
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Actualizar Perfil">
            </div>
        </form>
    </div>
</div>
@endsection
{{-- Cargando scripts de trix editor mediante @section y endsection --}}
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"
    integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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