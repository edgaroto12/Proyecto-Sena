
<template>
    <div>
        <h1>Clientes proyecto ADSI</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4 position-relative">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control" required>
                            <div class="valid-tooltip">Campo OK</div>
                            <div class="invalid-tooltip">Complete los datos</div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input id="apellido" name="apellido" type="text" class="form-control" required>
                            <div class="valid-tooltip">Campo OK</div>
                            <div class="invalid-tooltip">Complete los datos</div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input id="telefono" name="telefono" type="text" class="form-control" required>
                            <div class="valid-tooltip">Campo OK</div>
                            <div class="invalid-tooltip">Complete los datos</div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="edad" class="form-label">Edad</label>
                            <input id="edad" name="edad" type="text" class="form-control" required>
                            <div class="valid-tooltip">Campo OK</div>
                            <div class="invalid-tooltip">Complete los datos</div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento</label>
                            <input type="date" min="1940-01-01" id="fecha_nacimiento" name="fecha_nacimiento"  class="form-control" required>
                            <div class="valid-tooltip">Campo OK</div>
                            <div class="invalid-tooltip">Complete los datos</div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="cargo_id" class="form-label">Cargo Id</label>
                            <input id="cargo_id" name="cargo_id" type="text" class="form-control" required>
                            <div class="valid-tooltip">Campo OK</div>
                            <div class="invalid-tooltip">Complete los datos</div>
                        </div>
                        <div class="row">
                            <span>Pais de Origen</span>
                            <select class="form-select" aria-label="Default select example">
                            <option selected>Seleccione un pais</option>
                            <option value="1">Mexico</option>
                            <option value="2">Colombia</option>
                            <option value="3">Peru</option>
                            <option value="4">Chile</option>
                            </select>
                            <div class="valid-tooltip">Campo OK</div>
                            <div class="invalid-tooltip">Complete los datos</div>
                        </div>
                    
                        <button type="submit" class="btn btn-warning fw-bold">Enviar</button>                       
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</template>



<script>




</script>



