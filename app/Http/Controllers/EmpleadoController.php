<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados['datos'] = Empleado::paginate(50);
        return view('empleados.index', $empleados); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos =[
            'dni_empleado'=>'required|string|max:8',
            'nom_empleado'=>'required|string|max:80',
            'ape_empleado'=>'required|string|max:80',
            'sex_empleado'=>'required|string',
            'fnac_empleado'=>'required|date',
            'dir_empleado'=>'required|string|max:250',
            'dist_empleado'=>'required|string|max:60',
            'prov_empleado'=>'required|string|max:60',
            'dep_empleado'=>'required|string|max:60',
            'estciv_empleado'=>'required|string|max:20'
        ];
        $mensaje=['required'=>'El :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);
        $empleados = request()->except('_token');
        Empleado::insert($empleados);
        //return response()->json($empleados);
        return redirect('empleados')->with('Mensaje','Agregado Satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($dni_empleado)
    {
        $empleados = Empleado::findOrFail($dni_empleado);

        return view('empleados.edit',compact('empleados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dni_empleado)
    {
        $datos = request()->except(['_token','_method']);
        Empleado::where('dni_empleado','=',$dni_empleado)->update($datos);
        /*$empleados = Empleado::findOrFail($dni_empleado);
        return view('empleados.edit',compact('empleados'));*/
        return redirect('empleados')->with('Mensaje','Modificado Satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($dni_empleado)
    {
        Empleado::destroy($dni_empleado);
        return redirect('empleados')->with('Mensaje','Eliminado Satisfactoriamente');
    }
}
