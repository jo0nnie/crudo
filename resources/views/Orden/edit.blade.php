@extends('vistas/template')
@section('title', 'Editar Ordenes de Trabajo')
@section('contenido')

<main>
    <div class="container py-4">
        <h2 class="mb-4">Editar Orden de Trabajo</h2>

        @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ url('orden_de_trabajo/' . $orden->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card mb-4">
                <div class="card-header"><strong>Detalles de la Orden</strong></div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="Estado" class="col-sm-3 col-form-label">Estado de Orden</label>
                        <div class="col-sm-9">
                            <select name="Estado" id="Estado" class="form-select" required>
                                <option value=""></option>
                                <option value="Realizado" {{ $orden->Estado == 'Realizado' ? 'selected' : '' }}>Realizado</option>
                                <option value="Creado" {{ $orden->Estado == 'Creado' ? 'selected' : '' }}>Creado</option>
                                <option value="En proceso" {{ $orden->Estado == 'En proceso' ? 'selected' : '' }}>En proceso</option>
                                <option value="Finalizado" {{ $orden->Estado == 'Finalizado' ? 'selected' : '' }}>Finalizado</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Fecha" class="col-sm-3 col-form-label">Fecha de creación</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="Fecha" id="Fecha" value="{{ $orden->Fecha_de_creacion }}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Tecnicos" class="col-sm-3 col-form-label">Equipo de Trabajo</label>
                        <div class="col-sm-9">
                            <select name="equipo_de_trabajo_id" id="Tecnicos" class="form-select" required>
                                <option value=""></option>
                                @foreach ($equipos_de_trabajo as $equipo)
                                    <option value="{{ $equipo->id }}" {{ $orden->equipo_de_trabajo_id == $equipo->id ? 'selected' : '' }}>
                                        {{ $equipo->equipo }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Tarea_a_realizar" class="col-sm-3 col-form-label">Tarea a realizar</label>
                        <div class="col-sm-9">
                            <select name="Tarea_a_realizar" id="Tarea_a_realizar" class="form-select" required>
                                <option value=""></option>
                                <option value="Conexion" {{ $orden->Tarea_a_realizar == 'Conexion' ? 'selected' : '' }}>Conexion</option>
                                <option value="Desconexion" {{ $orden->Tarea_a_realizar == 'Desconexion' ? 'selected' : '' }}>Desconexion</option>
                                <option value="Reconexion" {{ $orden->Tarea_a_realizar == 'Reconexion' ? 'selected' : '' }}>Reconexion</option>
                                <option value="Servicio domiciliario" {{ $orden->Tarea_a_realizar == 'Servicio domiciliario' ? 'selected' : '' }}>Servicio domiciliario</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header"><strong>Datos del Cliente</strong></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $orden->cliente->nombre }}" required>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" value="{{ $orden->cliente->apellido }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $orden->cliente->direccion }}" required>
                    </div>
                </div>
            </div>
            <div class="text-start">
                <a href="{{ url('orden_de_trabajo') }}" class="btn btn-primary me-2">Volver</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</main>
@endsection

