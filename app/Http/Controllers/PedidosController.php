<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pedidos;

class PedidosController extends Controller
{
    
    public function index()
    {
        $pedido = pedidos::all();
        $array=array(
            'status'=>200,
            'msj'=>'consulta exitosa'   
        );

        return [
            'data'=>$pedido,
            'response'=>$array
        
        ];
         
    } //
    public function store(Request $request)
    {
        // Validate the request...
 
        $pedido = new pedidos;
 
        $pedido->nombre_cliente = $request->nombre_cliente;
        $pedido->numero_mesa = $request->numero_mesa;
        $pedido->nombre_mesero = $request->nombre_mesero;
        $pedido->fecha_pedido = $request->fecha_pedido;
        $pedido->hora_pedido = $request->hora_pedido;
 
        $pedido->save();
        return [
            'msj'=>'se guardo correctamente'
        ];
    } //
    public function update(Request $request)
    {
        // Validate the request...
 
        $pedido = pedidos::find($request->id);
 
        $pedido->nombre_cliente = $request->nombre_cliente;
        $pedido->numero_mesa = $request->numero_mesa;
        $pedido->nombre_mesero = $request->nombre_mesero;
        $pedido->fecha_pedido = $request->fecha_pedido;
        $pedido->hora_pedido = $request->hora_pedido;
 
        $pedido->save();
        
    } //
    public function destroy(Request $request)
    {                      
        $pedido = pedidos::find($request->id);
        $pedido->delete();
    }
}
