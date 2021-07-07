<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
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
        //
        $datos['empleados']=Empleados::paginate(5);

        return view('empleados.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
        $validated = $request->validate([
            'Nombre' => 'required|string|max:100',
            'Correo' => 'required|email',
            'Sexo'=>'required',
            'Area'=> 'required',
            'Descripción'=> 'required',
            'Roles' => 'required',
            'Boletin' => 'nullable'

        ]);
     $Mensaje=["required"=>'El :attribute es requerido'];
     $this->validate($request,$campo,$Mensaje);

        $datosEmpleado=request()->except('_token');
        Empleados::insert($datosEmpleado);
       // return response()->json($datosEmpleado);
       return redirect('empleados')->with('Mensaje','Empleado Agregado Con Éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado=Empleados::findOrFail($id);

        return view('empleados.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'Nombre' => 'required|string|max:100',
            'Correo' => 'required|email',
            'Sexo'=>'required',
            'Area'=> 'required',
            'Descripción'=> 'required',
            'Roles' => 'required',
            'Boletin' => 'nullable'
            

        ]);
        $Mensaje=["required"=>'El :attribute es requerido'];
       

        $datosEmpleado=request()->except(['_token','_method']);
        Empleados::where('id','=',$id)->update($datosEmpleado);
       // $empleado=Empleados::findOrFail($id);

       // return view('empleados.edit',compact('empleado'));

        return redirect('empleados')->with('Mensaje','Empleado Modificado Con Éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Empleados::destroy($id);

        return redirect('empleados')->with('Mensaje','Empleado Eliminado');;

    }
}
