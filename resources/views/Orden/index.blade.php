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
                    <td>{{ $orden->numero_de_orden }}</td>
                    <td>{{ $orden->Estado }}</td>
                    <td>{{ $orden->Fecha_de_creacion }}</td>
                    <td>{{ $orden->equipo_de_trabajo->equipo }}</td>
                    <td>{{ $orden->cliente->nombre }} {{ $orden->cliente->apellido }}</td>
                    <td><a href="{{ url('orden_de_trabajo/'.$orden->id.'/detalle') }}" class="btn btn-info"><i class="fa-solid fa-eye" style="color: #000000;"></i></a></td>
                    <td><a href="{{ url('orden_de_trabajo/'.$orden->id.'/edit') }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"
                        onclick="setDeleteForm(this.dataset.url)"
                        data-url="{{ url('orden_de_trabajo/' . $orden->id) }}">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $ordentrabajo->links('pagination::bootstrap-4') }}
        </div>

        <div class="text mt-3">
            <a href="{{ url('orden_de_trabajo/create') }}" class="btn btn-primary bt-sm">Nueva Orden</a>
        </div>

    </div>
</main>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Eliminar Orden de Trabajo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Está seguro de eliminar esta orden?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                <form id="deleteForm" action="" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function setDeleteForm(actionUrl) {
    document.getElementById('deleteForm').action = actionUrl;
}
</script>
@endsection
