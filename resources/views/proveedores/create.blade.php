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
<div class="padre">
    <h2 class="hijo">Crear nuevo proveedor</h2>
</div>
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <form action="{{route('proveedores.store')}}" enctype="multipart/form-data" method="POST" novalidate>
            @csrf
            {{-- Nombre de la compañia --}}
            <div class="form-group">
                <label for="empresa">Nombre de la Empresa:</label>
                <input type="text" name="empresa" class="form-control @error('empresa') is-invalid @enderror"
                    id="empresa" placeholder="Nombre de la Empresa" value={{old('empresa')}}>
                @error('empresa')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            {{-- Categoria del provedor --}}
            <div class="form-group">
                <label for="categoria">Categoría del Proveedor</label>
                <select name="categoria" class="form-control @error('categoria') is-invalid @enderror">
                    <option value=""> -- Seleccione -- </option>
                    @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{old('categoria')==$categoria->id ? 'selected' : '' }}>{{$categoria->nombre}}</option>
                    @endforeach
                </select>
                @error('categoria')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            {{-- Nombre del Contacto --}}
            <div class="form-group">
                <label for="contacto">Nombre del Contacto:</label>
                <input type="text" name="contacto" class="form-control @error('contacto') is-invalid @enderror"
                    id="contacto" placeholder="Nombre del contacto" value={{old('contacto')}}>
                @error('contacto')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            {{-- Correo Electrónico --}}
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="text" name="correo" class="form-control @error('correo') is-invalid @enderror" id="correo"
                    placeholder="Correo Electrónico" value={{old('correo')}}>
                @error('correo')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            {{-- Telefono de Concato --}}
            <div class="form-group">
                <label for="telefono">Teléfono de Contacto:</label>
                <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror"
                    id="telefono" placeholder="Telefono de Contacto" value={{old('telefono')}}>
                @error('telefono')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Logo del proveedor --}}
                <label for="imagen">Elige la Imagen:</label>
                <input id="imagen" type="file" class="form-control @error('imagen') is-invalid @enderror"
                    name="imagen">
                @error('imagen')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            {{-- Boton para subir el formulario --}}
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Agregar Nuevo Proveedor">
            </div>
        </form>
    </div>
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