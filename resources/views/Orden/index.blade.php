@extends('vistas/template')
@section('title', 'Ordenes de Trabajo')
@section('contenido')

<main>
    <div class="container py-4">
        <h2>Lista de Ordenes</h2>


        <a href="{{ url('orden_de_trabajo/create')}}"class="btn btn-primary btn-sm">Nueva Orden</a>

        <table class="table table-hover">

        <thead>
    <tr>
        <th>Número de Orden</th>
        <th>Estado</th>
        <th>Fecha de Creación</th>
        <th>Equipo</th>
        <th>Cliente</th>
        <th>Detalle</th>
        <th>Modificar</th>
        <th>Eliminar</th>
    </tr>
</thead>

<tbody>
    @foreach($ordentrabajo as $orden)
    <tr>
        <td>{{$orden->id}}</td>
        <td>{{$orden->Estado}}</td>
        <td>{{$orden->Fecha_de_creacion}}</td>
        <td>{{$orden->equipo_de_trabajo}}</td>
        <td>{{$orden->cliente->nombre}} {{ $orden->cliente->apellido}}</td>
        <td><button class="btn btn-Info btn-lg"><i class="fa-solid fa-eye"></i></td>
        <th><a href="{{url('orden_de_trabajo/'.$orden->id.'/edit')}}"class="btn btn-warning btn-lg"><i class="fa-solid fa-pen-to-square"></i></a></th>
        <td><button class="btn btn-danger btn-lg"><i class="fa-solid fa-trash-can"></i></td>
    </tr>
    @endforeach
</tbody>



        </table>


    </div>
</main>