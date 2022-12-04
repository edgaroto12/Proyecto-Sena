@extends('layouts.app')


@section('content')
<h1>Pedidos proyecto ADSI</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4 position-relative">
                        <label for="nombre_cliente" class="form-label">Nombre Cliente</label>
                        <input id="nombre_cliente" name="nombre_cliente" type="text" class="form-control" required>
                        <div class="valid-tooltip">Campo OK</div>
                        <div class="invalid-tooltip">Complete los datos</div>
                    </div>
                    <div class="col-md-3 position-relative">
                        <label for="numero_mesa">Numero Mesa</label>
                        <input type="number" min="1" max="100" id="numero_mesa" name="numero_mesa"  class="form-control" required>
                        
                        <div class="valid-tooltip">Campo OK</div>
                        <div class="invalid-tooltip">Complete los datos</div>
                    </div>
                    <div class="row">
                        <br>
                        <span>Nombre Mesero</span>
                        <br>
            
                        <div class="col-md-3 position-relative form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Carlos</label>
                        </div>
                        <div class="col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Edgar</label>
                        </div>
                        <div class="col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Felipe</label>
                        </div>
            
                    </div>
                    <div class="valid-tooltip">Campo OK</div>
                        <div class="invalid-tooltip">Complete los datos</div>                  
                            
                    <div class="col-md-4 position-relative">
                        <label for="fecha_pedido" class="form-label">Fecha Pedido</label>
                        <input type="date"  id="fecha_pedido" name="fecha_pedido" class="form-control" required>
                        <div class="valid-tooltip">Campo OK</div>
                        <div class="invalid-tooltip">Complete los datos</div>
                    </div>
                    <div class="col-md-3 position-relative">
                        <label for="hora_pedido" class="form-label">Hora Pedido</label>
                        <input type="time"  id="hora_pedido" name="hora_pedido"  class="form-control" required>
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
    <pedidos-component></pedidos-component>

</div>


@endsection