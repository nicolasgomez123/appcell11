<?php 
session_start();

if(isset($_SESSION["usuario"])){

?>

<?php
require_once "vistas/parte_superior.php"; 
?>

<style>
  #Perfil{
    text-align: center;
    margin-top: 10px;
    width: 550px;
    height: 350px;
    margin: auto;

}

#img{
  margin-top: 10px;
  border-radius: 100px;
  border: 3px solid #000;
}


#conf{
  margin-top: 180px;
  margin-right: 100px;
}

#tabla{
  width: 500px;
  text-align: center;
  margin: auto;
  color: #000;
}

</style>

<div class="container">

                <?php
                include_once "../bd/conexion.php";

                $sql= "SELECT * FROM roles";
                $consultaSQL = $conexion->prepare($sql);
                $consultaSQL->execute();

                $usuarios = $consultaSQL->fetchAll(PDO::FETCH_OBJ);

                  foreach($usuarios as $usuario){
                ?>

    <div class="row">
      <div id="Perfil">
         <div class="col-12">
            <img src="<?php echo $usuario->imagen ?>" width="200px"  class="img-fluid" id="img">
            <div id="tabla">    
              <h3 class="mt-3 mb-3" ><strong><?php echo $_SESSION['usuario'];  ?></strong></h3>
              <h3><?php echo $usuario->rol ?></h3>
            </div>
        </div>

        <button type="button" class="btn btn-primary">Editar</button>
       <?php } ?>
        <!-- <form action="" method="POST" enctype="multipart/form-data">

          <input type="file" name="imagen" value="<?php echo $usuario->imagen ?>">
          
          <button type="submit" name="subir" class="btn btn-primary">Guardar</button>

        </form> -->
 
      </div>
    </div>

    <?php

          if(isset($_POST['subir'])){

            $ruta = "../images/";
            $rut = $ruta.$usuario->id.".jpg";
            $fichero = $ruta.basename($_FILES['imagen']['name']);
            if(move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta.$usuario->id.".jpg")){

            include_once "../bd/conexion.php";
      
            $sentencia = $conexion->prepare("UPDATE roles set imagen = '$rut' where id = '".$usuario->id."'");
            $resultado = $sentencia->execute();

          }
          }

    ?>

</div>


<?php
}else{
  header("Location: ../login.php");
}
?>

<?php require_once "vistas/parte_inferior.php" ?>
