@extends('vistas/template')
@section('title', 'Detalle de Orden')
@section('contenido')

<main>
    <div class="container py-4">
        <h2>Detalle de Orden</h2>
        <h4>Equipo de Trabajo</h4>


        <table class="table table-striped table-bordered table-hover text-center">
            <thead class="bg-dark text-white">
            <tr>
                <th>TÉCNICO 1</th>
                <th>TÉCNICO 2</th>
                <th>VEHÍCULO</th>
            </tr>
            </thead>
            <tr>
                <td>
                    @if(isset($orden->equipo_de_trabajo->tecnicos[0]))
                        <img src="{{ asset('Imagenes/Tecnicos/' . $orden->equipo_de_trabajo->tecnicos[0]->foto) }}"
                             alt="Foto de {{ $orden->equipo_de_trabajo->tecnicos[0]->nombre }}"
                             style="width: 100px; height: 100px; border: 1px solid #000;">
                    @endif
                </td>
                <td>
                    @if(isset($orden->equipo_de_trabajo->tecnicos[1]))
                        <img src="{{ asset('Imagenes/Tecnicos/' . $orden->equipo_de_trabajo->tecnicos[1]->foto) }}"
                             alt="Foto de {{ $orden->equipo_de_trabajo->tecnicos[1]->nombre }}"
                             style="width: 100px; height: 100px; border: 1px solid #000;">
                    @endif
                </td>
                <td>
                    <img src="{{ asset('Imagenes/Vehiculos/' . $orden->equipo_de_trabajo->vehiculo->foto) }}"
                         alt="Foto del Vehículo"
                         style="width: 170px; height: 100px; border: 1px solid #000;">
                </td>
            </tr>
            <tr>
                <td>
                    @if(isset($orden->equipo_de_trabajo->tecnicos[0]))
                        <p>{{ $orden->equipo_de_trabajo->tecnicos[0]->nombre }} {{ $orden->equipo_de_trabajo->tecnicos[0]->apellido }}</p>
                    @endif
                </td>
                <td>
                    @if(isset($orden->equipo_de_trabajo->tecnicos[1]))
                        <p>{{ $orden->equipo_de_trabajo->tecnicos[1]->nombre }} {{ $orden->equipo_de_trabajo->tecnicos[1]->apellido }}</p>
                    @endif
                </td>
                <td>
                    <p>{{ $orden->equipo_de_trabajo->vehiculo->marca }} {{ $orden->equipo_de_trabajo->vehiculo->modelo }}</p>
                </td>
            </tr>
            <tr>
                <td>
                    @if(isset($orden->equipo_de_trabajo->tecnicos[0]))
                        <p>{{ $orden->equipo_de_trabajo->tecnicos[0]->correo }}</p>
                    @endif
                </td>
                <td>
                    @if(isset($orden->equipo_de_trabajo->tecnicos[1]))
                        <p>{{ $orden->equipo_de_trabajo->tecnicos[1]->correo }}</p>
                    @endif
                </td>
                <td>
                    <p>{{ $orden->equipo_de_trabajo->vehiculo->patente }}</p>
                </td>
            </tr>
        </table>

        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>Número de Orden</th>
                <td>{{ $orden->numero_de_orden }}</td>
            </tr>
            <tr>
                <th>Equipo de Trabajo</th>
                <td>{{ $orden->equipo_de_trabajo->equipo }}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ $orden->Estado }}</td>
            </tr>
            <tr>
                <th>Cliente</th>
                <td>{{ $orden->cliente->nombre }} {{ $orden->cliente->apellido }} </td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>{{ $orden->cliente->direccion }} </td>
            </tr>
            <tr>
                <th>Tarea a Realizar</th>
                <td>{{ $orden->Tarea_a_realizar }}</td>
            </tr>
            <tr>
                <th>Fecha de Creación</th>
                <td>{{ $orden->Fecha_de_creacion }}</td>
            </tr>
        </table>

        <a href="{{url('orden_de_trabajo')}}" class="btn btn-primary">Volver</a>
    </div>
</main>
@endsection
