@extends('vistas/template')
@section('title', 'Ordenes de Trabajo')
@section('contenido')

<main>
    <div class="container py-4">
        <h2>Lista de Ordenes</h2>
        <table class="table table-striped table-bordered table-hover text-center">
            <thead class="bg-dark text-white">
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
                    <td>{{$orden->numero_de_orden}}</td>
                    <td>{{$orden->Estado}}</td>
                    <td>{{$orden->Fecha_de_creacion}}</td>
                    <td>{{$orden->equipo_de_trabajo->equipo}}</td>
                    <td>{{$orden->cliente->nombre}} {{ $orden->cliente->apellido}}</td>
                    <td><a href="{{url('orden_de_trabajo/'.$orden->id.'/detalle')}}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a></td>
                    <td><a href="{{url('orden_de_trabajo/'.$orden->id.'/edit')}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td>
                        <form action="{{ url ('orden_de_trabajo/'.$orden->id)}}" method="post">
                            @method('delete')@csrf
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{$ordentrabajo-> links('pagination::bootstrap-4')}}
        </div>


        <div class="text mt-3">
            <a href="{{ url('orden_de_trabajo/create')}}" class="btn btn-primary bt-sm">Nueva Orden</a>
        </div>

    </div>
</main>
@endsection
