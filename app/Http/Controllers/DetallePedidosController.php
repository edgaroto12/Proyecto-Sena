<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle_pedidos;

class DetallePedidosController extends Controller
{
    public function index()
    {
        $detalle_pedido = detalle_pedidos::all();
        $array=array(
            'status'=>200,
            'msj'=>'consulta exitosa'   
        );

        return [
            'data'=>$detalle_pedido,
            'response'=>$array
        
        ];
         
    } //
    public function store(Request $request)
    {
        // Validate the request...
 
        $detalle_pedido = new detalle_pedidos;
 
        $detalle_pedido->cantidad = $request->cantidad;
        $detalle_pedido->observacion = $request->observacion;
        $detalle_pedido->pedido_id = $request->pedido_id;
        $detalle_pedido->producto_id = $request->producto_id;
        
 
        $detalle_pedido->save();
        return [
            'msj'=>'se guardo correctamente'
        ];
    } //
    public function update(Request $request)
    {
        // Validate the request...
 
        $detalle_pedido = detalle_pedidos::find($request->id);
        
        $detalle_pedido ->cantidad = $request->cantidad;
        $detalle_pedido ->observacion = $request->observacion;
 
        $detalle_pedido->save();
        
    } //
    public function destroy(Request $request)
    {                      
        $detalle_pedido = detalle_pedidos::find($request->id);
        $detalle_pedido->delete();
    } //
}
