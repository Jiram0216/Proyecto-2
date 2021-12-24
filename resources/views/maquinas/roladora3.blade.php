{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
{{-- Agregando mi contendido en senction mediante @section y @endsection --}}
@section('content')
<main class="contenedor contenido--principal">
    <div class="grid2">
        <article class="maquina">
            <h2 id="layout" class="titulo_mayusculas">Maquina</h2>
            <img src="img/img1.jpg" alt="Roladora Tee de Soporte RTS" class="producto__imagen">
            <p class="maquina__texto"> También conocidas como máquinas plegadoras, 
                las prensas dobladoras están especialmente fabricada para moldear y 
                curvar hojas, placas o piezas de metal. </p>
        </article>
        <aside class="asidebar1">
            <h2 class="titulo_mayusculas">Caracteristicas</h2>
            <ul class="lista">
                <li class="boton3 boton--secundario">1.-Marca: Titan</li>
                <li class="boton3 boton--secundario">2.-Modelo: P3P75T10</li>
                <li class="boton3 boton--secundario">3.-Capacidad: 75 Toneladas</li>
                <li class="boton3 boton--secundario">4.-Garganta: 10 ft"</li>
                <li class="boton3 boton--secundario">5.-Potencia: Motor 7 Hp</li>
                <li class="boton3 boton--secundario">6.-Voltaje: 220 voltios</li>
                <li class="boton3 boton--secundario">7.-Transmisión: Hidráulica</li>
                <li class="boton3 boton--secundario">8.-3 Pistones: Diámetro 5 In</li>
            </ul>
        </aside>
        <article class="maquina">
            <h2 class="titulo_mayusculas">Componentes</h2>
            <img src="img/img2.jpg" alt="Roladora Tee de Soporte RTS" class="producto__imagen margin">
            
        </article>
        <aside class="asidebar1">
            <h2 class="titulo_mayusculas">Componentes</h2>
            <ul class="lista">
                <li class="boton3 boton--secundario">1.-Motor eléctrico N°1: 4 HP</li>
                <li class="boton3 boton--secundario">2.-Motor eléctrico N°2: 2 HP</li>
                <li class="boton3 boton--secundario">3.-Armazón</li>
                <li class="boton3 boton--secundario">4.-Pistones hidráulicos (3)</li>
                <li class="boton3 boton--secundario">5.-Bomba hidráulica N°1</li>
                <li class="boton3 boton--secundario">6.-Bomba hidráulica N°2</li>
                <li class="boton3 boton--secundario">7.-Cortina</li>
                <li class="boton3 boton--secundario">8.-Control de cortina</li>
                <li class="boton3 boton--secundario">9.-Tornillo de ajuste de grados</li>
                <li class="boton3 boton--secundario">10.-Mordazas</li>
                <li class="boton3 boton--secundario">11.-Bancada</li>
                <li class="boton3 boton--secundario">12.-Gabinete eléctrico</li>
                <li class="boton3 boton--secundario">13.-Depósito de aceite y sistema hidráulico</li>
                <li class="boton3 boton--secundario">14.-Tablero de ciclos</li>
                <li class="boton3 boton--secundario">15.-Control de bancada</li>
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
<footer class="contenido--pie">
    <div class="contenido--pie__text contenedor">
        <a class="boton boton--primario" href="{{route('maquinas.planta1')}}"><h2>Regresar</h2></a>
    </div>
</footer> <!--contenido--pie-->
@endsection