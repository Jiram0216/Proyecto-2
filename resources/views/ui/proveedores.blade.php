<div class="col-md-4 mt-4">
    <div class="card shadow">
        {{-- <img class="card-img-top" src="/storage/{{$orden->imagen}}" alt="imagen de la orden de trabajo"> --}}
        <div class="card-body">
            {{-- Nueva --}}
                <p>
                    <span class="font-weight-bold text-primary float-left">Folio: {{$proveedor->id}} </span>
                </p>
                {{-- Nombre de la maquina --}}
                <h3>Empresa: {{$proveedor->empresa}}</h3>
                <p class="text-center">
                    <span class="font-weight-bold fecha lead">Concato: </span>
                    {{$proveedor->contacto}}
                </p>
                <p class="text-center">
                    <span class="font-weight-bold fecha lead">Telefono: </span>
                    {{$proveedor->telefono}}
                </p>
                <p class="text-center">
                    <span class="font-weight-bold fecha lead">Correo Electronico: </span>
                    {{$proveedor->correo}}
                </p>
                {{-- Fecha
                <p>
                    @php
                    $fecha = $proveedor->created_at
                    @endphp
                    <span class="font-weight-bold fecha  float-left">Fecha:
                        <fecha-orden fecha="{{$fecha}}"></fecha-orden>
                    </span>
                </p> --}}
                {{-- Folio --}}
                <p>
                    <span class="font-weight-bold text-primary float-left">Folio: {{$proveedor->id}} </span>
                </p>
                {{-- Boton para ver la orden --}}
                <a href="{{route('proveedores.show', $nueva->id) }}"
                    class="btn btn-primary d-block font-weight-bold text-uppercase">
                    Ver Proveedor
                </a>
        </div>
    </div>
</div>