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
        $ordentrabajo = orden_de_trabajo::with('equipo_de_trabajo','cliente')->get();
        return view('Orden.index', ['ordentrabajo' => $ordentrabajo]);

    }

    public function detalle($id)
{
    $orden = Orden_de_Trabajo::with([
        'equipo_de_trabajo.tecnicos',
        'equipo_de_trabajo.vehiculo',
        'cliente'
    ])->findOrFail($id);

    return view('Orden.detalle', compact('orden'));
}




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos_de_trabajo = equipo_de_trabajo::all();
        $clientes = cliente::all();
        return view('Orden.create',compact('equipos_de_trabajo','clientes'));
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
            'equipo_de_trabajo_id' => 'required',
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'direccion' => 'required|max:255',
            'Tarea_a_realizar' => 'required',
            'correo' => 'required',

        ]);

        $cliente = Cliente::firstOrCreate(
            ['nombre' => $request->nombre, 'apellido' => $request->apellido],
            ['direccion' => $request->direccion]
        );
        $ultimoNumeroDeOrden = orden_de_trabajo::max('numero_de_orden');
        $nuevoNumeroDeOrden = str_pad((int)$ultimoNumeroDeOrden + 1, 5, '0', STR_PAD_LEFT);

        $orden = new orden_de_trabajo();
        $orden->Estado = $request->input('Estado');
        $orden->Fecha_de_creacion = $request->input('Fecha');
        $orden->equipo_de_trabajo_id = $request->input('equipo_de_trabajo_id');
        $orden->cliente_id = $cliente->id;
        $orden->numero_de_orden = $nuevoNumeroDeOrden;
        $orden->Tarea_a_realizar= $request->input('Tarea_a_realizar');
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
    public function edit($id) {

        $orden = orden_de_trabajo::findOrFail($id);
        $equipos_de_trabajo = equipo_de_trabajo::all();
        return view('Orden.edit', compact('orden', 'equipos_de_trabajo'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @param  \App\Models\orden_de_trabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $request->validate([
            'Estado' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'equipo_de_trabajo_id' => 'required',
            'Tarea_a_realizar' => 'required',
        ]);
        $orden = orden_de_trabajo::findOrFail($id);
        $orden->Estado = $request->input('Estado');
        $orden->equipo_de_trabajo_id = $request->input('equipo_de_trabajo_id');
        $orden->Tarea_a_realizar = $request->input('Tarea_a_realizar');
        $cliente = Cliente::findOrFail($orden->cliente_id);
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente->direccion = $request->input('direccion');

        $cliente->save();
        $orden->save();


        return redirect('orden_de_trabajo')->with('success', 'Orden de trabajo actualizada correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orden_de_trabajo  $orden_de_trabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orden_de_trabajo = orden_de_trabajo::find($id);
        $cliente = Cliente::findOrFail($orden_de_trabajo->cliente_id);
        $orden_de_trabajo -> delete();
        $cliente_ordenes = orden_de_trabajo::where('cliente_id', $cliente->id)->count();

        if ($cliente_ordenes == 0) {

            $cliente->delete();
    }

        return redirect("orden_de_trabajo/");
    }
}
