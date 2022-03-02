<?php 
session_start();

if(isset($_SESSION["usuario"])){

?>

<?php
require_once "vistas/parte_superior.php"; 
?>

        <form action="" method="POST" enctype="multipart/form-data">

          <input type="file" name="imagen" value="<?php echo $usuario->imagen ?>">
          
          <button type="submit" name="subir" class="btn btn-primary">Guardar</button>

        </form> 


        <?php
}else{
  header("Location: ../login.php");
}
?>

<?php require_once "vistas/parte_inferior.php" ?>
