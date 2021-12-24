<div class="col-md-4 mt-4">
    <div class="card shadow">
        {{-- <img class="card-img-top" src="/storage/{{$orden->imagen}}" alt="imagen de la orden de trabajo"> --}}
        <div class="card-body">
            {{-- Folio --}}
            <p>
                <span class="font-weight-bold text-primary">Folio: {{$orden->id + 1500}} </span>
            </p>
            {{-- Nombre de la maquina --}}
            <h3>{{$orden->maquina}}</h3>
            {{-- tipo de trabajo --}}
            <p class="text-center">
                <span class="font-weight-bold text-primary">Tipo de Trabajo: </span>
                {{$orden->trabajo}}
            </p>
            {{-- Categorias de mantenimiento --}}
            <p class="text-center">
                <span class="font-weight-bold text-primary">Tipo de Mantenimiento: </span>
                {{$orden->categorias->nombre}}
            </p>
            {{-- Horas de paro --}}
            <p class="text-center">
                <span class="font-weight-bold text-primary">Total de horas de paro: </span>
                {{$orden->horas}}
            </p>
            {{-- Monto --}}
            <p class="text-center">
                <span class="font-weight-bold text-primary">Monto: $
                    {{$orden->monto}}
                </span>
            </p>
            {{-- Fecha --}}
            <p>
                @php
                $fecha = $orden->created_at
                @endphp
                <span class="font-weight-bold fecha text-secondary float-right">Fecha:
                    <fecha-orden fecha="{{$fecha}}"></fecha-orden>
                </span>
            </p>
            {{-- Boton para ver la orden --}}
            <a href="{{route('ordentrabajo.show', $orden->id) }}"
                class="btn btn-primary d-block font-weight-bold text-uppercase">
                Ver Orden
            </a>
        </div>
    </div>
</div>