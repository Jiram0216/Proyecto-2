{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
{{-- Cargando hoja de estilos de trix editor mediante @section y endsection --}}
@section('styles')
{{-- Trix --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"
    integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
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
<div class="padre">
    <h2 class="hijo">Editar orden de trabajo: {{$ordenTrabajo->maquina}}</h2>
</div>
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <form action="{{route ('ordentrabajo.update', ['ordenTrabajo' => $ordenTrabajo->id])}}"
            enctype="multipart/form-data" method="POST" novalidate>
            @csrf
            @method('PUT')
            <div class="form-group">
                {{-- Maquina de la orden de trabajo --}}
                <label for="maquina">Nombre de Máquina:</label>
                <input type="text" name="maquina" class="form-control @error('maquina') is-invalid @enderror"
                    id="maquina" placeholder="Nombre de la maquina" value="{{$ordenTrabajo->maquina}}">
                @error('maquina')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Area de la Maquina en la orden de trabajo --}}
                <label for="area">Área:</label>
                <input type="text" name="area" class="form-control @error('area') is-invalid @enderror" id="area"
                    placeholder="Area de la maquina" value="{{$ordenTrabajo->area}}">
                @error('area')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Categoria de trabajo a realizar --}}
                <label for="categoria">Categoría:</label>
                <select name="categoria" class="form-control @error('categoria') is-invalid @enderror" id="categoria">
                    <option value="">-- Seleccione --</option>
                    {{-- Recorriendo el arreglo de la variable categorias --}}
                    @foreach($categorias as $categoria )
                    <option value="{{ $categoria->id }}" {{ $ordenTrabajo->categoria_id == $categoria->id ? 'selected' :
                        '' }}>{{$categoria->nombre}}</option>
                    @endforeach
                </select>
                @error('categoria')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Tipo de trabajo de la maquina en la orden de trabajo --}}
                <label for="trabajo">Tipo de trabajo:</label>
                <input type="text" name="trabajo" class="form-control @error('trabajo') is-invalid @enderror"
                    id="trabajo" placeholder="trabajo de la maquina" value="{{$ordenTrabajo->trabajo}}">
                @error('trabajo')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Desglose de tiempo en la orden de trabajo --}}
                <label for="horas">Desglose de tiempos:</label>
                <input type="text" name="horas" class="form-control @error('horas') is-invalid @enderror" id="horas"
                    placeholder="horas de la maquina" value="{{$ordenTrabajo->horas}}">
                @error('horas')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Descripcion de la orden de trabajo --}}
                <label for="descripcion">Descripción:</label>
                <input id="descripcion" type="hidden" name="descripcion" value="{{$ordenTrabajo->descripcion}}">
                {{-- Agregando trix editor a mi descripcion de orden de trabajo --}}
                <trix-editor class="form-control @error('descripcion') is-invalid @enderror" input="descripcion">
                </trix-editor>
                @error('descripcion')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Causa de la orden de trabajo --}}
                <label for="causa">Causa:</label>
                <input id="causa" type="hidden" name="causa" value="{{$ordenTrabajo->causa}}">
                {{-- Agregando trix editor a mi causa de orden de trabajo --}}
                <trix-editor class="form-control @error('causa') is-invalid @enderror" input="causa"></trix-editor>
                @error('causa')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Solucion de la orden de trabajo --}}
                <label for="solucion">Solución:</label>
                <input id="solucion" type="hidden" name="solucion" value="{{$ordenTrabajo->solucion}}">
                {{-- Agregando trix editor a mi solucion de orden de trabajo --}}
                <trix-editor class="form-control @error('solucion') is-invalid @enderror" input="solucion">
                </trix-editor>
                @error('solucion')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Refacciones de la orden de trabajo --}}
                <label for="refacciones">Refacción:</label>
                <input id="refacciones" type="hidden" name="refacciones" value="{{$ordenTrabajo->refacciones}}">
                {{-- Agregando trix editor a mi refaccion de orden de trabajo --}}
                <trix-editor class="form-control @error('refacciones') is-invalid @enderror" input="refacciones">
                </trix-editor>
                @error('refacciones')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Observaciones de la orden de trabajo --}}
                <label for="observaciones">Observación:</label>
                <input id="observaciones" type="hidden" name="observaciones" value="{{$ordenTrabajo->observaciones}}">
                {{-- Agregando trix editor a mi observacion de orden de trabajo --}}
                <trix-editor class="form-control @error('observaciones') is-invalid @enderror" input="observaciones">
                </trix-editor>
                @error('observaciones')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Monto de la orden de trabajo --}}
                <label for="monto">Monto: $</label>
                <input type="text" name="monto" class="form-control @error('monto') is-invalid @enderror" id="monto"
                    placeholder="monto de la maquina" value="{{$ordenTrabajo->monto}}">
                @error('monto')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Fecha de conclucion de la orden de trabajo --}}
                <label for="fecha">Fecha de conclusión:</label>
                <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" id="fecha"
                    placeholder="fecha de conclucion" value="{{$ordenTrabajo->fecha}}">
                @error('fecha')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Imagen de la orden de trabajo --}}
                <label for="imagen">Elige la imagen:</label>
                <input id="imagen" type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen">
                @if($ordenTrabajo->imagen)
                <div class="mt-4">
                    <p>Imagen actual:</p>
                    <img src="/storage/{{$ordenTrabajo->imagen}}" style="width: 300px" alt="Imaagen actual">
                </div>
                @error('imagen')
                <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                @enderror
                @endif
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold"
                    value="Agregar Orden de Trabajo">
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