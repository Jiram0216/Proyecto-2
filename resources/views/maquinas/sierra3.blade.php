{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
{{-- Agregando mi contendido en senction mediante @section y @endsection --}}
@section('content')
<main class="contenedor contenido--principal">
    <div class="grid2">
        <article class="maquina">
            <h2 id="layout" class="text-uppercase font-weight-bold mt-2">Maquina</h2>
            <img src="img/img1.jpg" alt="Sierra S03" class="producto__imagen">
            <p class="maquina__texto"> También conocidas como máquinas plegadoras, 
                las prensas dobladoras están especialmente fabricada para moldear y 
                curvar hojas, placas o piezas de metal. </p>
        </article>
        <aside class="asidebar1">
            <h2 class="text-uppercase font-weight-bold mt-2">Caracteristicas</h2>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">1.-Marca: CTD MACHINES</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">2.-Modelo: M25K</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">3.-Serie: 874R</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">4.-Potencia: 2 Hp</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">5.-Voltaje: 220 voltios</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">6.-RPM: 3725</li>
            </ul>
        </aside>
        <article class="maquina">
            <h2 class="text-uppercase font-weight-bold mt-2">Componentes</h2>
            <img src="img/img2.jpg" alt="Sierra S03" class="producto__imagen margin">
            
        </article>
        <aside class="asidebar1">
            <h2 class="text-uppercase font-weight-bold mt-2">Componentes</h2>
            <ul class="lista">
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">1.-Marca: CTD MACHINES</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">2.-Modelo: M25K</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">3.-Serie: 874R</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">4.-Potencia: 2 Hp</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">5.-Voltaje: 220 voltios</li>
                <li class="btn btn-outline-dark btn-block mr-2 text-uppercsae font-weight-bold">6.-RPM: 3725</li>
            </ul>
        </aside>
    </div><!--grid2-->
    <div class="grid3 fondo">
        <article>
            <h2 class="titulo_mayusculas">Mantenimiento</h2>
            <ul class="lista">
                <li>Orden de trabajo</li>
                <li>Ultimo mantenimiento</li>
                <li>Próximo mantenimiento</li>
            </ul>
        </article>
        <article>
            <h2 class="titulo_mayusculas">Proveedores</h2>
            <ul class="lista">
                <li>Nombre</li>
                <li>Contacto</li>
                <li>telefono</li>
                <li>Dirección</li>
                <li>Ubicación</li>
                <li>Piezas</li>
            </ul>
        </article>
        <article>
            <h2 class="titulo_mayusculas">Costos</h2>
            
        </article>
    </div><!--grid3-->
</main>
@endsection
{{-- Creando el footer --}}
@section('footer')
    @include('ui.footer')
@endsection