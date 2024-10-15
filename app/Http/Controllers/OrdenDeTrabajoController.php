<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\equipo_de_trabajo;
use App\Models\Gerente;
use App\Models\orden_de_trabajo;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class OrdenDeTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordentrabajo = orden_de_trabajo::all();
        return view('Orden.index', ['ordentrabajo' => $ordentrabajo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gerentes = Gerente::all();
        $equipos_de_trabajo = equipo_de_trabajo::all();
        return view('Orden.create',compact('gerentes','equipos_de_trabajo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Estado' => 'required',
            'Fecha' => 'required|date',
            'Tarea' => 'required|string',
            'Gerente' => 'required',
            'equipo_de_trabajo_id' => 'required',
            'Nombre_de_Cliente' => 'required|string|max:200',
            'apellido_de_Cliente' => 'required|string|max:200',
            'Direccion' => 'required|string|max:200',

        ]);

        $cliente = cliente::create([
            'nombre' => $request->input('Nombre_de_Cliente'),
            'apellido' => $request->input('apellido_de_Cliente'),
            'direccion' => $request->input('Direccion'),
        ]);

        $orden = new orden_de_trabajo();
        $orden->Estado = $request->input('Estado');
        $orden->Fecha_de_creacion = $request->input('Fecha');
        $orden->Tareas_a_realizar = $request->input('Tarea');
        $orden->gerente_id = $request->input('Gerente');
        $orden->equipo_de_trabajo_id = $request->input('equipo_de_trabajo_id');
        $orden->Nombre_de_Cliente = $cliente->nombre;
        $orden->apellido_de_Cliente= $cliente->apellido;
        $orden->Direccion_de_cliente = $Direccion = $request->input('Direccion');
        $orden->save();

        return redirect('orden_de_trabajo')->with('success', 'Orden creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orden_de_trabajo  $orden_de_trabajo
     * @return \Illuminate\Http\Response
     */
    public function show(orden_de_trabajo $orden_de_trabajo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orden_de_trabajo  $orden_de_trabajo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $ordenes = orden_de_trabajo::find($id);
    $gerentes = gerente::all();
    $equipos_de_trabajo = equipo_de_trabajo::all();

    return view('Orden.edit', [
        'orden_de_trabajo' => $ordenes,
        'gerentes' => $gerentes,
        'equipos_de_trabajo' => $equipos_de_trabajo,
    ]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orden_de_trabajo  $orden_de_trabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orden_de_trabajo $orden_de_trabajo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orden_de_trabajo  $orden_de_trabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy(orden_de_trabajo $orden_de_trabajo)
    {
        //
    }
}
