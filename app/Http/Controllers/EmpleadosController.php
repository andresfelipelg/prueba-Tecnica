<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Area;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        $areas = Area::all();

        return view('empleados.index',compact('empleados','areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        return view ('empleados.create',compact('areas'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new Empleado();
        $empleados->nombre = $request->nombre;
        $empleados->email = $request->email;
        $empleados->sexo = $request->sexo;
        $empleados->area_id = $request->area_id;
        $empleados->boletin = $request->boletin;
        $empleados->descripcion = $request->descripcion;
        $empleados->save();

        return redirect(route('empleados.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Area::find($id);
        $areas = Area::all();

        return view('empleados.edit',compact('empleado','areas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);
        $empleado->nombre = $request->nombre;
        $empleado->email = $request->email;
        $empleado->sexo = $request->sexo;
        $empleado->area_id = $request->area_id;
        $empleado->boletin = $request->boletin;
        $empleado->descripcion = $request->descripcion;
        $empleado->save();

        return redirect(route('empleados.index'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
