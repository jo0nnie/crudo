@extends('vistas/template')
@section('title', 'Modificar Ordenes de Trabajo')
@section('contenido')

<main>
    <div class='container py-4'>
        <h2>Modificar Orden</h2>

        @if ($errors -> any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach($errors ->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{url('orden_de_trabajo/'.'$orden->id')}}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3 row">
                <label for= "Estado" class="col-sm-2 col-form-label">Estado de Orden</label>
                <div class="col-sm-5">
                    <select name="Estado" id="Estado" calss="form-select"required>
                        <option value=""></option>
                        <option value="No realizado">No realizado</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for= "Fecha" class="col-sm-2 col-form-label">Fecha de creacion</label>
                <div class="col-sm-5">
                    <input type="date" class= "form-control" name="Fecha" id="Fecha" value="{{$orden_de_trabajo->Fecha_de_creacion }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for= "Tarea" class="col-sm-2 col-form-label">Tarea a Realizar</label>
                <div class="col-sm-5">
                    <input type="text" class= "form-control" name="Tarea" id="Tarea" value="{{$orden_de_trabajo->Tareas_a_realizar}}" required>
                </div>
            </div>

             <div class="mb-3 row">
                <label for="Gerente" class="col-sm-2 col-form-label">Gerente</label>
                <div class="col-sm-5">
                    <select name="Gerente" id="Gerente" class="form-select" required>
                        <option value="">Seleccionar Gerente</option>
                        @foreach ($gerentes as $gerente)
                            <option value="{{ $orden_de_trabajo->$gerente->id }}">{{ $gerente->nombre }} {{ $gerente->apellido }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Tecnicos" class="col-sm-2 col-form-label">Equipo de Trabajo</label>
                <div class="col-sm-5">
                    <select name="equipo_de_trabajo_id" id="Tecnicos" class="form-select" required>
                        <option value="">Seleccionar Grupo de Trabajo</option>
                        @foreach ($equipos_de_trabajo as $equipo)
                            <option value="{{ $orden_de_trabajo->$equipo->id }}">{{ $equipo->equipo }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for= "Nombre_de_Cliente" class="col-sm-2 col-form-label">Nombre de Cliente</label>
                <div class="col-sm-5">
                    <input type="text" class= "form-control" name="Nombre_de_Cliente" id="Nombre_de_Cliente" value="{$orden_de_trabajo->Nombre_de_Cliente}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for= "apellido_de_Cliente" class="col-sm-2 col-form-label">Apellido de Cliente</label>
                <div class="col-sm-5">
                    <input type="text" class= "form-control" name="apellido_de_Cliente" id="apellido_de_Cliente" value="{{$orden_de_trabajo->apellido_de_Cliente}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for= "Direccion" class="col-sm-2 col-form-label">Direccion de Cliente</label>
                <div class="col-sm-5">
                    <input type="text" class= "form-control" name="Direccion" id="Direccion" value="{{old('Direccion_de_cliente')}}" required>
                </div>
            </div>

            <a href="{{url('orden_de_trabajo')}}"class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-success">Guardar</button>

        </form>
    </div>
</main>
