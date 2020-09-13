@extends('layouts.plantilla')
@section('cabecera')
        <a href="{{url('empleados')}}" class="btn btn-warning">Inicio</a>
@endsection
@section('contenido')
<form action="{{url('/empleados/'.$empleados->dni_empleado)}}" method="post" class="rounded shadow-lg p-5 m-5">
    {{ csrf_field() }}
    {{method_field('PATCH') }}
    @include('empleados.form',['modo'=>'editar'])
</form>
@endsection