<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;

class ProductosController extends Controller
{
    //
    public function index()
    {
        // Validate the request...
 
        $producto = productos::all();
        $array=array(
            'status'=>200,
            'msj'=>'consulta exitosa'
        );
        return [
            'data'=>$producto,
            'response'=>$array
        
        ];
         
    } //
    public function store(Request $request)
    {
        // Validate the request...
 
        $producto = new productos;
 
        $producto->nombre_plato = $request->nombre_plato;
        $producto->tipo_plato = $request->tipo_plato;
        $producto->descripcion_plato = $request->descripcion_plato;
        $producto->tipo_cocina = $request->tipo_cocina;
 
        $producto->save();
        return [
            'msj'=>'se guardo correctamente'
        ];
    } //
    public function update(Request $request)
    {
        // Validate the request...
 
        $producto = productos::find($request->id);
 
        $producto->nombre_plato = $request->nombre_plato;
        $producto->tipo_plato = $request->tipo_plato;
        $producto->descripcion_plato = $request->descripcion_plato;
        $producto->tipo_cocina = $request->tipo_cocina;
 
        $producto->save();
        
    } //
    public function destroy(Request $request)
    {                      
        $producto = productos::find($request->id);
        $producto->delete();
    }
    
}
