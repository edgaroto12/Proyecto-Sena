<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cargos;

class CargosController extends Controller
{
    public function index()
    {                      
        $cargos = Cargos::all();
        $array=array(
            'status'=>200,
            'msj'=>'consulta exitosa'     
        );
        
        return [
            'data'=>$cargos,
            'response'=>$array
        
        ];
        
    }
       
    public function store(Request $request)
    {
        // Validate the request...
 
        $cargo = new cargos;
        $cargo ->nombres = $request->nombres;
    
 
        $cargo->save();
        return [
            'msj'=>'se guardo correctamente'
        ];
    } //
    public function update(Request $request)
    {
        // Validate the request...
                        
        $cargo = Cargos::find($request->id);
 
        $cargo->nombres = $request->nombres;
        
 
        $cargo->save();
    }
    public function destroy(Request $request)
    {                      
        $cargo = Cargos::find($request->id);
        $cargo->delete();
    }
}
