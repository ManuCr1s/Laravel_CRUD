@extends('layouts.plantilla')
@section('cabecera')
        <a href="{{url('empleados')}}" class="btn btn-warning">Inicio</a>
@endsection
@section('contenido')
@if(count($errors)>0)
    <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <h6>{{$error}}</h6>
            @endforeach
    </div>
@endif
<form action="{{url('/empleados')}}" method="post" class="rounded shadow-lg p-5 m-5">
    {{ csrf_field() }}
    @include('empleados.form',['modo'=>'crear'])
</form>
@endsection