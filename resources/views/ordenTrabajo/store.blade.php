{{-- Obteniendo el diseño de layouts.app --}}
@extends('layouts.app')
{{-- Agregando contenido en botones mediante @section y @endsection --}}
@section('botones')
    <a href="{{route('ordentrabajo.index')}}" class="btn btn-primary mr-2">Regresar</a>
@endsection
{{-- Agregando mi contendido en content mediante @section y @endsection --}}
@section('content')
    
@endsection