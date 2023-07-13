<?php 
require_once "vistas/parte_superior.php"; 
?>
    <style>

#button{
  display: flex;
  margin-top: -38px;
  margin-left: 235px;
  border-radius: 0 10px 10px 0;
}

.form-select{
    width: 75%;
}
</style>

<!--CONTENT-HEADER-->
<section class="container content-header text-center m-2">
  <div class="row align-items-start">

    <!--Boton agregar-->
    <button class="btn btn-primary boton col-4 col-sm-4" data-toggle="modal" data-target="#modal-insertar">
      Agregar <i class="fas fa-user"></i>
    </button>

    <!--Filtro de estado 1-->
      <!-- <div class="form-check form-check-inline">
          <label class="form-check-label">
              <input class="input" type="checkbox" 
              id="sin solucion"  value="sin_solucion">
              SIN SOLUCCION
          </label>

          <label class="form-check-label">
              <input class="input" type="checkbox" 
              id="demorado"  value="demorado">
              DIAGNOSTICADO
          </label>

          <label class="form-check-label">
              <input class="input" type="checkbox" 
              id="entregado a cobrar"  value="entregado_a_cobrar">
              ENTREGADO A COBRAR
          </label>

          <label class="form-check-label">
              <input class="input" type="checkbox" 
              id="entregado"  value="entregado">
              ENTREGADO
          </label>

          <label class="form-check-label">
              <input class="input" type="checkbox" 
              id="reparado cerrado"  value="reparado_cerrado">
              REPARADO CERRADO
          </label>

          <label class="form-check-label">
              <input class="input" type="checkbox" 
              id="reparado abierto"  value="reparado_abierto">
              REPARADO ABIERTO
          </label>
          
          <label class="form-check-label">
              <input class="input" type="checkbox" 
              id="en reparacion"  value="en_reparacion">
              EN REPARACION
          </label>

          <label class="form-check-label">
              <input class="input" type="checkbox" 
              id="recibido"  value="recibido">
              RECIBIDO
          </label>
      
          <label class="form-check-label">
              <input class="input" type="checkbox" 
              id="diagnosticado"  value="diagnosticado">
              DIAGNOSTICADO
          </label>
        </div> -->
    <!--Fin filtro de estado-->

    <!--Filtro de estado 2-->
    <div class="col-4 col-sm-4">
      <select name="estado" id="estado" class="form-select">
        <option value="">SELECCIONAR ESTADO</option>
        <option value="RECIBIDO">RECIBIDO</option>
        <option value="DIAGNOSTICADO">DIAGNOSTICADO</option>
        <option value="EN_REPARACION">EN REPARACION</option>
        <option value="REPARADO_ABIERTO">REPARADO ABIERTO</option>
        <option value="REPARADO_CERRADO">REPARADO CERRADO</option>
        <option value="ENTREGADO">ENTREGADO</option>
        <option value="ENTREGADO_A_COBRAR">ENTREGADO A COBRAR</option>
        <option value="DEMORADO">DIAGNOSTICADO</option>
        <option value="SIN_SOLUCCION">SIN SOLUCCION</option>
      </select>
    </div>
    <!--Fin filtro de estado 2-->


    <!--Buscador-->
    <div class="col-4 col-sm-4">
      <div class="d-flex nav-link" role="search">
        <input id="buscador" class="form-control me-2" placeholder="Buscar por nombre">
        <button  class="btn btn-outline-success" id="buscar">Buscar</button>
      </div>
    </div>

  </div>
</section>



<!-- Tabla clientes -->
<div class="container">
    <div class="table-responsive">
            <table class="table table-bordered table-md text-center"  id="tblClientes">
                <thead class=" thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Falla</th>
                        <th scope="col">Observacion</th>
                        <th scope="col">Fecha Ingreso</th>
                        <th scope="col">Fecha Entrega</th>
                        <th scope="col">Precio</th>
                        <th scope="col">imei</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody id="datosClientes">
                    <!-- Datos del cliente -->
                    
                </tbody>
            </table>
        </div>
</div>


<!--inicio Modal editar-->
<div class="modal fade" id="modal-editar" tabindex="-1"  role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarModalLabel">Editar Datos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">&times;</button>
        </div>
        <div class="modal-body">
         <form id="form-editar">
            <div class="mb-3">
             <label for="id" class="form-label">ID</label>
             <input type="text" class="form-control" id="id" name="id">
            </div>

            <div class="mb-3">
             <label for="cliente" class="form-label">Cliente</label>
             <input type="text" class="form-control" id="cliente" name="cliente">
            </div>

            <div class="mb-3">
             <label for="codigo" class="form-label">Código</label>
             <input type="text" class="form-control" id="codigo" name="codigo">
            </div>

            <div class="mb-3">
             <label for="modelo" class="form-label">Modelo</label>
             <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>

            <div class="mb-3">
             <label for="falla" class="form-label">Falla</label>
             <input type="text" class="form-control" id="falla" name="falla" required>
            </div>

            <div class="mb-3">
             <label for="observacion" class="form-label">Observación</label>
             <textarea class="form-control" id="observacion" name="observacion" rows="3" required></textarea>
            </div>

            <div class="mb-3">
             <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
             <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
            </div>

            <div class="mb-3">
             <label for="fecha_salida" class="form-label">Fecha de Salida</label>
             <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" required>
            </div>

            <div class="mb-3">
             <label for="precio" class="form-label">Precio</label>
             <input type="text" class="form-control" id="precio" name="precio" required>
            </div>

            <div class="mb-3">
             <label for="imei" class="form-label">IMEI</label>
             <input type="text" class="form-control" id="imei" name="imei" required>
            </div>

            <div class="mb-3">
             <label for="estado" class="form-label">Estado</label>            
              <select name="estado" id="estado" class="form-select" required>
                <option value="">SELECCIONAR ESTADO</option>
                <option value="RECIBIDO">RECIBIDO</option>
                <option value="DIAGNOSTICADO">DIAGNOSTICADO</option>
                <option value="EN_REPARACION">EN REPARACION</option>
                <option value="REPARADO_ABIERTO">REPARADO ABIERTO</option>
                <option value="REPARADO_CERRADO">REPARADO CERRADO</option>
                <option value="ENTREGADO">ENTREGADO</option>
                <option value="ENTREGADO_A_COBRAR">ENTREGADO A COBRAR</option>
                <option value="DEMORADO">DIAGNOSTICADO</option>
                <option value="SIN_SOLUCCION">SIN SOLUCCION</option>
              </select>
            
            </div>
           <button type="submit" class="btn btn-primary" id="actualizar">Guardar Cambios</button>
         </form>
       </div>
      </div>
  </div>
</div> 
<!--Fin Modal editar-->


<!-- Modal Insertar Trabajo -->
<div class="modal fade" id="modal-insertar" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Insertar Nuevo Trabajo</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">×</span>
          <span class="sr-only">Close</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_agregar">
          <div class="mb-3">
            <label for="modal-cliente" class="form-label" name="modal-cliente">Cliente</label>
            <input type="text" class="form-control"  id="modal-cliente"  required>
          </div>
          <div class="mb-3">
            <label for="modal-codigo" class="form-label" name="modal-codigo">Código</label>
            <input type="text" class="form-control" id="modal-codigo" disabled>
            <button class="btn btn-primary" onclick="generateRandomNumber()">Generar Codigo</button>
          </div>
          <div class="mb-3">
            <label for="modal-modelo" class="form-label" name="modal-modelo">Modelo</label>
            <input type="text" class="form-control" id="modal-modelo" required>
          </div>
          <div class="mb-3">
            <label for="modal-falla" class="form-label" name="modal-falla">Falla</label>
            <input type="text" class="form-control" id="modal-falla" required>
          </div>
          <div class="mb-3">
            <label for="modal-observacion" class="form-label" name="modal-observacion">Observación</label>
            <textarea class="form-control" id="modal-observacion" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="modal-fecha_ingreso" class="form-label" name="modal-fecha_ingreso">Fecha de Ingreso</label>
            <input type="date" class="form-control" id="modal-fecha_ingreso" required>
          </div>
          <div class="mb-3">
            <label for="modal-fecha_salida" class="form-label" name="modal-fecha_salida">Fecha de Salida</label>
            <input type="date" class="form-control" id="modal-fecha_salida" required>
          </div>
          <div class="mb-3">
            <label for="modal-precio" class="form-label" name="modal-precio">Precio</label>
            <input type="text" class="form-control" id="modal-precio" required>
          </div>
          <div class="mb-3">
            <label for="modal-imei" class="form-label" name="modal-imei">IMEI</label>
            <input type="text" class="form-control" id="modal-imei" required>
          </div>
          <div class="mb-3">
            <label for="modal-estado" class="form-label" name="modal-estado">Estado</label>
            <select name="estado" id="modal-estado" class="form-select" required>
              <option value="">SELECCIONAR ESTADO</option>
              <option value="RECIBIDO">RECIBIDO</option>
              <option value="DIAGNOSTICADO">DIAGNOSTICADO</option>
              <option value="EN_REPARACION">EN REPARACION</option>
              <option value="REPARADO_ABIERTO">REPARADO ABIERTO</option>
              <option value="REPARADO_CERRADO">REPARADO CERRADO</option>
              <option value="ENTREGADO">ENTREGADO</option>
              <option value="ENTREGADO_A_COBRAR">ENTREGADO A COBRAR</option>
              <option value="DEMORADO">DIAGNOSTICADO</option>
              <option value="SIN_SOLUCCION">SIN SOLUCCION</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="submit"  class="btn btn-primary" id="agregar">Guardar Cambios</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </form>
      </div>            
    </div>
  </div>
</div>
<!-- Fin Modal Insertar clientes -->

<!--Inicio Paginacion-->
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item" id="anterior">
          <button class="page-link">
            Anterior
          </button>
        </li>
        
        <li class="page-item">
          <a class="page-link" id="numPagina">
                
          </a>
        </li>
        <li class="page-item" id="siguiente">
          <button class="page-link">
            Siguiente
          </button>
        </li>
    </ul>
</nav>
<!--Fin Paginacion-->



<?php require_once "vistas/parte_inferior.php"; ?>