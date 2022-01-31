<?php 
include_once "../bd/conexion.php";

require_once "vistas/parte_superior.php"; 
?>

        <!--CONTENT-HEADER-->
      <section class="content-header ">

        <div class="container">

          <div class="row mb-2">

          <div class="col-sm-6 col-md-6 mt-2">
            <a href="nuevo_cliente.php" class="btn btn-primary">Añadir nuevo cliente</a>
          </div>

          <div class="col-sm-6 col-md-6">
              <ul class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                  <a href="index.php">Inicio</a>
                </li>

                <li class="breadcrumb-item active">
                  Clientes
                </li>
              </ul>
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
          // $consultaSQL= $conexion->prepare("SELECT * FROM trabajos VALUES (?,?,?,?,?,??,?,?,?,?,?)");
          // $consultaSQL->execute(array($id,$cliente,$telefono,$modelo,$falla,$observacion,$fecha_ingreso,$fecha_entrega,$imagen,$precio,$imei,$estado));
          // $trabajos= $consultaSQL->fetchAll(PDO::FETCH_OBJ);

        $clientesPorPagina= 20;
        $totalClientes = $consultaSQL->rowCount();
        $paginas = $totalClientes/20; 
        $paginas = ceil($paginas);
        
        ?>
      <div class="table-responsive">
        <table class="table table-bordered table-md text-center"  id="tblClientes">
            <thead class=" thead-dark">
              <tr class="">
                <th scope="col">ID</th>
                <th scope="col">Cliente</th>
                <th scope="col">Codigo</th>
                <th scope="col">Modelo</th>
                <th scope="col">Falla</th>
                <th scope="col">Observacion</th>
                <th scope="col">Fecha Ingreso</th>
                <th scope="col">Fecha Entrega</th>
                <th scope="col">Precio</th>
                <th scope="col">Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
                // if(!$_GET){
                //   header('Location: ../index.php?pagina=1');
                //  }
                // if($_GET['pagina']>$paginas || $_GET['pagina']<= 0){
                //   header('Location: index.php?pagina=1');
                // }
                
                if($pagina = isset($_GET['pagina'])){;

                
                $iniciar = ($_GET['pagina']-1)*$clientesPorPagina;
                $sql_clientes = "SELECT * FROM trabajos limit :iniciar,:clientes";
                $sentencia_clientes = $conexion->prepare($sql_clientes);
                $sentencia_clientes->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
                $sentencia_clientes->bindParam(':clientes', $clientesPorPagina, PDO::PARAM_INT);
                $sentencia_clientes->execute();

                $resultado_clientes = $sentencia_clientes->fetchAll(PDO::FETCH_OBJ);

              ?>

              <?php
                foreach($resultado_clientes as $trabajo){
              ?>
              <tr>
                <td scope="row"><?php echo $trabajo->id ?></td>
                <td scope="row"><?php echo $trabajo->cliente ?></td>
                <td scope="row"><?php echo $trabajo->telefono?></td>
                <td scope="row"><?php echo $trabajo->modelo ?></td>
                <td scope="row"><?php echo $trabajo->falla ?></td>
                <td scope="row"><?php echo $trabajo->observacion ?></td>
                <td scope="row"><?php echo $trabajo->fecha_ingreso ?></td>
                <td scope="row"><?php echo $trabajo->fecha_entrega ?></td>
                <td scope="row"><?php echo $trabajo->precio ?></td>
                <td scope="row"><?php echo $trabajo->estado ?></td>
                <td>
                  <!-- <a href="<?= 'borrar.php?id=' . ($fila["id"]) ?>">🗑️Borrar</a> -->
                  <a href="<?= 'editar_cliente.php?id=' . $trabajo->id ?>">✏️Editar</a>
                </td>
              </tr>
              <?php } } ?>
    
            </tbody>
        </table>

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



<?php require_once "vistas/parte_inferior.php" ?>
