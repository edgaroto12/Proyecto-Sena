<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personas;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = personas::all();
        $array=array(
            'status'=>200,
            'msj'=>'consulta exitosa'   
        );

        return [
            'data'=>$personas,
            'response'=>$array
        
        ];
         
    } //
    public function store(Request $request)
    {
        // Validate the request...
 
        $persona = new personas;
 
        $persona->nombres = $request->nombres;
        $persona->apellidos = $request->apellidos;
        $persona->telefono = $request->telefono;
        $persona->edad = $request->edad;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->cargo_id = $request->cargo_id;
 
        $persona->save();
        return [
            'msj'=>'se guardo correctamente'
        ];
    } //
    public function update(Request $request)
    {
        // Validate the request...
 
        $persona = personas::find($request->id);
 
        $persona->nombres = $request->nombres;
        $persona->apellidos = $request->apellidos;
        $persona->telefono = $request->telefono;
        $persona->edad = $request->edad;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
 
        $persona->save();
        
    } //
    public function destroy(Request $request)
    {                      
        $persona = personas::find($request->id);
        $persona->delete();
    }  //
}
