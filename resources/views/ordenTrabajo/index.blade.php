{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
{{-- Agregando contenido en botones mediante @section y @endsection --}}
@section('botones')
<a href="{{route('menu.index')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
    </svg>
    Regresar
</a>
<a href="{{route('ordentrabajo.create')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
    <svg class="icono5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
        </path>
    </svg>
    Orden
</a>
@endsection
{{-- Agregando mi contendido en content mediante @section y @endsection --}}
@section('content')
<div class="padre">
    <h2 class="hijo">Administra tus órdenes de trabajo</h2>
</div>
<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">{{-- Creando una tabla para administrar ordenes de trabajo --}}
        <thead class="bg-primary text-light">
            <tr class="text-center">
                <th scole="col">Máquina</th>
                <th scole="col">Categoría</th>
                <th scole="col">Acciones</th>
            </tr>
        </thead>

        <body>
            @foreach($ordentrabajos as $ordentrabajo)
            <tr>
                {{-- titulo --}}
                <td>{{$ordentrabajo->maquina}}</td>
                {{-- Categoria --}}
                <td>{{$ordentrabajo->categorias->nombre}}</td>
                {{-- Acciones de botones --}}
                <td>
                    <eliminar-orden orden-id={{$ordentrabajo->id}}></eliminar-orden>
                    <a href="{{route ('ordentrabajo.edit',$ordentrabajo->id)}}"
                        class="btn btn-dark d-block mb-2">Editar</a>
                    <a href="{{route ('ordentrabajo.show',$ordentrabajo->id)}}"
                        class="btn btn-success d-block mb-2">Ver</a>
                </td>
            </tr>
            @endforeach
        </body>
    </table>
    <div class="col-12 mt-4 justify-content-center d-flex">
        {{ $ordentrabajos->links() }}
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