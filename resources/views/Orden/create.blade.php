@extends('vistas/template')
@section('title', 'Registrar Ordenes de Trabajo')
@section('contenido')

<main>
    <div class="container py-4">
        <h2 class="mb-4">Registrar Nueva Orden de Trabajo</h2>

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

        <form action="{{ url('orden_de_trabajo') }}" method="post">
            @csrf
                    <!-- Número de Orden -->
                    <div class="form-group">
                        <label for="numero_de_orden" >Número de Orden</label>
                        <input type="text" class="form-control" name="numero_de_orden" id="numero_de_orden" value="{{ old('numero_de_orden') }}" required>
                    </div>
                    
                    <!-- Estado de Orden -->
                    <div class="form-group">
                        <label for="Estado" >Estado de Orden</label>
                        <select name="Estado" id="Estado" class="form-select" required>
                            <option value=""></option>
                            <option value="Creado">Creado</option>
                            <option value="En Proceso">En Proceso</option>
                            <option value="Finalizado">Finalizado</option>
                        </select>
                    </div>

                    <!-- Fecha de Creación -->
                    <div class="form-group">
                        <label for="Fecha" >Fecha de Creación</label>
                        <input type="date" class="form-control" name="Fecha" id="Fecha" value="{{ old('Fecha') }}" required>
                    </div>

                    <!-- Equipo de Trabajo -->
                    <div class="form-group">
                        <label for="Tecnicos" >Equipo de Trabajo</label>
                            <select name="equipo_de_trabajo_id" id="Tecnicos" class="form-select" required>
                                <option value=""></option>
                                @foreach ($equipos_de_trabajo as $equipo)
                                    <option value="{{ $equipo->id }}">{{ $equipo->equipo }}</option>
                                @endforeach
                            </select>
                    </div>

                    <!-- Tarea a Realizar -->
                    <div class="form-group">
                        <label for="Tarea_a_realizar" >Tarea a Realizar</label>
                            <select name="Tarea_a_realizar" id="Tarea_a_realizar" class="form-select" required>
                                <option value=""></option>
                                <option value="Conexion">Conexion</option>
                                <option value="Desconexion">Desconexion</option>
                                <option value="Reconexion">Reconexion</option>
                                <option value="Servicio domiciliario">Servicio domiciliario</option>
                            </select>
                    </div>

                    <!-- Materiales y Estado -->
                    <div class="form-group">
                        <label for="material_estado" >Materiales y Estado</label>
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                @foreach(['router', 'cable', 'antena', 'módem'] as $material)
                                    <div style="display: flex; align-items: center; gap: 10px;">
                                        <input type="checkbox" name="materiales[]" value="{{ $material }}" id="material_{{ $material }}" 
                                                onchange="toggleEstado('{{ $material }}')">
                                        <span>{{ ucfirst($material) }}</span>
                                        <select name="material_estado[{{ $material }}]" class="form-control" 
                                                id="estado_{{ $material }}" disabled>
                                            <option value="completamente usado">Completamente Usado</option>
                                            <option value="alcanzó">Alcanzó</option>
                                            <option value="no alcanzó">No Alcanzó</option>
                                            <option value="sobró">Sobró</option>
                                        </select>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>

            <!-- Datos del Cliente -->
            <div class="card mb-4">
                <div class="card-header"><strong>Datos del Cliente</strong></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" value="{{ old('apellido') }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion') }}" required>
                    </div>
                </div>
            </div>

            <!-- Botones de Acción -->
            <div class="text-start">
                <a href="{{ url('orden_de_trabajo') }}" class="btn btn-primary me-2">Volver</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</main>
<script>
    function toggleEstado(material) {
        const estadoSelect = document.getElementById(`estado_${material}`);
        estadoSelect.disabled = !document.getElementById(`material_${material}`).checked;
    }
</script>
@endsection

