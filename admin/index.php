<?php 
include_once "../bd/conexion.php";
session_start();

if(isset($_SESSION["usuario"])){

?>

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
    width: 55%;
}
</style>

 <!--CONTENT-HEADER-->
 <section class="content-header ">

<div class="container">

<div class="row mb-4">

    <div class="col-sm-6 col-md-4 mt-1">
      <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertar">
      <i class="fas fa-user-plus"></i>
      Añadir nuevo cliente
      </button>
    </div> 

    <!--Filtro de estado-->
        <div class="col-sm-6 col-md-5">
          <form action="filtro_estado.php" method="POST">
            <select name="estado" id="estado" class="form-select" onchange="enviar(this.form)" required="" >
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
            <button id="button" class="btn btn-primary" type="submit">Filtrar</button>
          </form>
        </div>
      <!--Filtro de estado-->


    <!-- Topbar Search -->
        <div class="col-sm-12 col-md-3">
          <form
              class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="read.php" method="GET">
              <div class="input-group" style="border: 1px solid #000; border-radius: 5px ">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2" name="busqueda">
                  <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">
                          <i class="fas fa-search fa-sm"></i>
                      </button>
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>
</section>


      <div class="container">
        <div class="btb btn-danger"></div>
        
        <?php
        include_once "../bd/conexion.php";

        
        $sql = "SELECT * FROM trabajos "; 
        $consultaSQL= $conexion->prepare($sql);
        $consultaSQL->execute();

        $trabajos = $consultaSQL->fetchAll(PDO::FETCH_OBJ);

        $clientesPorPagina= 20;
        $totalClientes = $consultaSQL->rowCount();
        $paginas = $totalClientes/20; 
        $paginas = ceil($paginas); 
        ?>
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
            <tbody>
              <?php  
                if($pagina = isset($_GET['pagina'])){;

                
                include "lista.php";
         
                foreach($resultado_clientes as $trabajo){
              ?>
              <tr>
                <td scope="row"><?php echo $trabajo->id?></td>
                <td scope="row"><?php echo $trabajo->cliente?></td>
                <td scope="row"><?php echo $trabajo->telefono?></td>
                <td scope="row"><?php echo $trabajo->modelo?></td>
                <td scope="row"><?php echo $trabajo->falla?></td>
                <td scope="row"><?php echo $trabajo->observacion ?></td>
                <td scope="row"><?php echo $trabajo->fecha_ingreso ?></td>
                <td scope="row"><?php echo $trabajo->fecha_entrega ?></td>
                <td scope="row"><?php echo $trabajo->precio?></td>
                <td scope="row"><?php echo $trabajo->imei?></td>
                <td scope="row"><?php echo $trabajo->estado ?></td>
                <td>
                  <a class="btn btn-primary" href="<?php echo 'editar_cliente.php?id=' . $trabajo->id?>"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                  <a class="btn btn-danger" href="<?php echo 'eliminar_cliente.php?id=' . $trabajo->id?>"><i class="fa fa-trash"></i></a>
                </td>
              
              </tr>
              <?php } } ?>
    
            </tbody>
        </table>

      <!-- Modal Insertar cientes--> 
        <div class="modal fade" id="insertar" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Insertar Nuevo Cliente</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
              </div>
              <div class="modal-body">
              
              <form method="POST" action="nuevo_cliente.php">
              
                <div class="form-group mt-3">
                  <label for="cliente">Cliente</label>
                  <input type="text" name="cliente" id="cliente" class="form-control" required="">
                </div>

                <div class="form-group mt-3">
                  <label for="telefono">Telefono</label>
                  <input type="text" name="telefono" id="telefono" class="form-control" required="">
                </div>

                <div class="form-group mt-3">
                  <label for="modelo">Modelo</label>
                  <input type="text" name="modelo" id="modelo" class="form-control" required="">
                </div>

                <div class="form-group mt-3">
                  <label for="falla">Falla</label>
                  <input type="text" name="falla" id="falla" class="form-control" required="">
                </div>

                <div class="form-group mt-3">
                  <label for="fecha_ingreso">Fecha de Ingreso</label>
                  <input type="text" name="fecha_ingreso" id="fecha_ingreso" class="form-control" required="">
                </div>

                <div class="form-group mt-3">
                  <label for="fecha_entrega">Fecha Entrega</label>
                  <input type="text" name="fecha_entrega" id="fecha_entrega" class="form-control" required="">
                </div>

                <div class="form-group mt-3">
                  <label for="precio">Precio</label>
                  <input type="text" name="precio" id="precio" class="form-control" required="">
                </div>

                <div class="form-group mt-3">
                  <label for="imei">Imei</label>
                  <input type="text" name="imei" id="imei" class="form-control" required="">
                </div>

                <div class="form-group mt-3">
                  <label for="estado">Estado</label>
                  <input type="text" name="estado" id="estado" class="form-control" required="">
                </div>

                <div class="form-group mt-3">
                    <label for="observacion">Observacion</label>
                    <textarea class="form-control" name="observacion" id="observacion" rows="3" required=""></textarea>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

              </form>
              </div>            
            </div>
          </div>
        </div>
      <!--Fin Modal Insertar cientes--> 



    <!--Inicio Paginacion-->
        <nav aria-label="Page navigation example">
          <ul class="pagination">

            <li class="page-item
            <?php echo $_GET['pagina']<=1? 'disabled' : '' ?>">

              <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina']-1 ?>">
                Anterior
              </a>

            </li>
            
            <?php for($i=0; $i<$paginas; $i++): ?>
            <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
              
              <a class="page-link" href="index.php?pagina=<?php echo $i+1 ?>">
                <?php echo $i+1 ?>
              </a>

            </li>
            <?php endfor ?>

            <li class="page-item
            <?php echo $_GET['pagina']>=$paginas? 'disabled' : '' ?>">

              <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina']+1 ?>">
                Siguiente
              </a>

            </li>
          </ul>
        </nav>
      </div>
    <!--Fin Paginacion-->



<?php
}else{
  header("Location: ../login.php");
}
?>

<?php require_once "vistas/parte_inferior.php" ?>
