@extends('layouts.plantilla')
@section('cabecera')
    <a href="{{url('empleados/create')}}" class="btn btn-success">Agregar Empleado</a>
@endsection
@section('contenido')
<table id="tabla" class="table border shadow-sm">
        <thead>
            <tr>
                <th class="th-sm">
                    DNI
                </th>
                <th class="th-sm">
                    Apellidos y Nombres
                </th>
                <th class="th-sm">
                    Sexo
                </th>
                <th class="th-sm">
                    Estado Civil
                </th>
                <th class="th-sm">
                    Accion
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $empleado)
                <tr>
                    <td>{{$empleado->dni_empleado}}</td>
                    <td>{{$empleado->ape_empleado}}, {{$empleado->nom_empleado}}</td>
                    <td>{{$empleado->sex_empleado}}</td>
                    <td>{{$empleado->estciv_empleado}}</td>
                    <td class="d-flex justify-content-start">
                        <a href="{{url('/empleados/'.$empleado->dni_empleado.'/edit')}}" class="btn btn-primary h-50 m-2">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                </svg>
                        </a>
                        <form action="{{url('/empleados/'.$empleado->dni_empleado)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                                <button type="submit" onclick="return confirm('Borrar');" class="btn btn-danger m-2">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>
                                </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
@endsection
<script src="{{asset('assets/js/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/filtros.js')}}"></script>
