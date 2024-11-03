@extends('vistas/template')
@section('title', 'Ordenes de Trabajo')
@section('contenido')

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Órdenes') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ url('orden_de_trabajo/create') }}" class="btn btn-primary bt-sm">Nueva Orden</a>
                                </a>
                            </div>
                        </div>
                    </div>    

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Número de Orden</th>
                                        <th>Estado</th>
                                        <th>Fecha de Creación</th>
                                        <th>Equipo</th>
                                        <th>Cliente</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($ordentrabajo as $orden)
                                        <tr>
                                            <td>{{ $orden->numero_de_orden }}</td>
                                            <td>{{ $orden->Estado }}</td>
                                            <td>{{ $orden->Fecha_de_creacion }}</td>
                                            <td>{{ $orden->equipo_de_trabajo->equipo }}</td>
                                            <td>{{ $orden->cliente->nombre }} {{ $orden->cliente->apellido }}</td>
                                            <td>
                                                <a href="{{ url('orden_de_trabajo/'.$orden->id.'/detalle') }}" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                <a href="{{ url('orden_de_trabajo/'.$orden->id.'/edit') }}" class="btn btn-sm btn-success"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                <form action="{{ url('orden_de_trabajo/'.$orden->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro que quiere eliminar la orden?');"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No hay órdenes disponibles.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div>
                            {{ $ordentrabajo->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

