<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cargos;

class CargosController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request...
 
        $cargo = new cargos;
 
        $cargo->nombres = $request->nombres;
 
        $cargo->save();
    } //
}
