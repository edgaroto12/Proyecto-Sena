@extends('layouts.app')


@section('content')
<h1>Detalle Pedidos ADSI</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-3 position-relative">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" min="1" max="100" id="cantidad" name="cantidad" type="number" class="form-control" required>
                        
                        <div class="valid-tooltip">Campo OK</div>
                        <div class="invalid-tooltip">Complete los datos</div>
                    </div>            
                    <div class="col-md-4 position-relative">
                        <label class="form-label" for="observacion" >Observacion</label>
                        
                        <textarea placeholder="Por favor escriba una brebe descripcion de su pedido" class="form-control"  name="observacion" id="observacion" cols="30" rows="10" ></textarea required>
                        <div class="valid-tooltip">Campo OK</div>
                        <div class="invalid-tooltip">Complete los datos</div>
                    </div>
                    
                    <div class="col-md-4 position-relative">
                        <label for="pedido_id" class="form-label">Pedido Id</label>
                        <input id="pedido_id" name="pedido_id" type="text" class="form-control" required>
                        <div class="valid-tooltip">Campo OK</div>
                        <div class="invalid-tooltip">Complete los datos</div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="producto_id" class="form-label">Producto Id</label>
                        <input id="producto_id" name="producto_id" type="text" class="form-control" required>
                        <div class="valid-tooltip">Campo OK</div>
                        <div class="invalid-tooltip">Complete los datos</div>
                    </div>
                    <button type="submit" class="btn btn-warning fw-bold">Enviar</button>                       
                </form>
                </div>
            </div>
        </div>
    </div>
<div id="app">
    <detalle_pedidos-component></detalle_pedidos-component>

</div>


@endsection