@extends('vistas/template')
@section('title', 'Registrar Ordenes de Trabajo')
@section('contenido')

<main>
    <div class='container py-4'>
        <h2>Registrar Orden</h2>

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

        <form action="{{url('orden_de_trabajo')}}" method="post">

            @csrf

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
                    <input type="date" class= "form-control" name="Fecha" id="Fecha" value="{{old('Fecha')}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Tecnicos" class="col-sm-2 col-form-label">Equipo de Trabajo</label>
                <div class="col-sm-5">
                    <select name="equipo_de_trabajo_id" id="Tecnicos" class="form-select" required>
                        <option value=""> </option>
                        @foreach ($equipos_de_trabajo as $equipo)
                            <option value="{{ $equipo->id }}">{{ $equipo->equipo }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"><strong>Datos del Cliente</strong></label>
            </div>

            <div class="mb-3 row">

                <div class="col-sm-2">
                    <label for="nombre" class="col-form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
                </div>


                <div class="col-sm-2">
                    <label for="apellido" class="col-form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" value="{{ old('apellido') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-sm-2">
                    <label for="direccion" class="col-form-label">Dirección</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion') }}" required>
                </div>
            </div>



            <a href="{{url('orden_de_trabajo')}}"class="btn btn-Primary">Volver</a>
            <button type="submit" class="btn btn-success">Guardar</button>

        </form>
    </div>
</main>
