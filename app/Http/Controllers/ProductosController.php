<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;

class ProductosController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the request...
 
        $producto = new productos;
 
        $producto->nombre_plato = $request->nombre_plato;
        $producto->tipo_plato = $request->tipo_plato;
        $producto->descripcion_plato = $request->descripcion_plato;
        $producto->tipo_cocina = $request->tipo_cocina;
 
        $producto->save();
    } //
}
