<template>
    <body>
    <h1>Productos proyecto ADSI</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-3 position-relative">
                        <label for="nombre_plato">Nombre Plato</label>
                        <select name="nombre_plato" id="nombre_plato" class="form-select" required>
                            <option selected disabled value="">Seleccione....</option>
                            <option>Trucha</option>
                            <option>Salmon</option>
                            <option>Churrasco</option>
                            <option>Baby</option>
                        </select>
                        <div class="valid-tooltip">Campo OK</div>
                        <div class="invalid-tooltip">Complete los datos</div>
                    </div>
                    <div class="col-md-3 position-relative">
                        <label for="tipo_plato">Tipo Plato</label>
                        <select name="tipo_plato" id="tipo_plato" class="form-select" required>
                            <option selected disabled value="">Seleccione....</option>
                            <option>Entrada</option>
                            <option>Fuerte</option>
                            <option>Postre</option>
                            <option>Bebidas</option>
                        </select>
                        <div class="valid-tooltip">Campo OK</div>
                        <div class="invalid-tooltip">Complete los datos</div>
                    </div>
                    
                    <div class="col-md-3 position-relative">
                        <label for="tipo_cocina">Tipo Cocina</label>
                        <select name="tipo_cocina" id="tipo_cocina" class="form-select" required>
                            <option selected disabled value="">Seleccione....</option>
                            <option>Plancha</option>
                            <option>Caliente</option>
                            <option>Fria</option>
                            <option>Postres</option>
                        </select>
                        <div class="valid-tooltip">Campo OK</div>
                        <div class="invalid-tooltip">Complete los datos</div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label class="form-label" for="descripcion" >Descripcion</label>
                        
                        <textarea placeholder="Por favor escriba una brebe descripcion de su pedido" class="form-control"  name="descripcion" id="descripcion" cols="30" rows="10" ></textarea >
                        <div class="valid-tooltip">Campo OK</div>
                        <div class="invalid-tooltip">Complete los datos</div>
                    </div>
                    
                        
                    <button type="submit" class="btn btn-warning fw-bold">Enviar</button>                       
                </form>
                </div>
            </div>
        </div>
    </div>
    </body>

 

</template>



<script>



</script>