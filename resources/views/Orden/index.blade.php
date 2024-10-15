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
        <th>#</th>
        <th>Estado</th>
        <th>Fecha de Creación</th>
        <th>Gerente</th>
        <th>Tecnicos</th>
        <th>Tareas a Realizar</th>
        <th>Nombre de Cliente</th>
        <th>Apellido de Cliente</th>
        <th>Dirección de Cliente</th>
        <th>Modificar</th>
        <th>#</th>
    </tr>
</thead>

<tbody>
    @foreach($ordentrabajo as $orden)
    <tr>
        <td>{{ $orden->id }}</td>
        <td>{{ $orden->Estado }}</td>
        <td>{{ $orden->Fecha_de_creacion }}</td>
        <td>{{ $orden->gerente_id }}</td>
        <td>{{ $orden->equipo_de_trabajo_id }}</td>
        <td>{{ $orden->Tareas_a_realizar }}</td>
        <td>{{ $orden->Nombre_de_Cliente }}</td>
        <td>{{ $orden->apellido_de_Cliente }}</td>
        <td>{{ $orden->Direccion_de_cliente }}</td>
        <th><a href="{{url('orden_de_trabajo/'.'$orden->id'.'/edit')}}"class="btn btn-warning btn-sm">Modificar</a></th>
        <td>#</td>
    </tr>
    @endforeach
</tbody>



        </table>


    </div>
</main>
