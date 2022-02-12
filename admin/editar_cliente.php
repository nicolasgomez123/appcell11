<?php 
session_start();
if(isset($_SESSION["usuario"])){

if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "../bd/conexion.php";
$sentencia =  $conexion->prepare("SELECT * FROM trabajos WHERE id = ?;");
$sentencia->execute([$id]);
$cliente = $sentencia->fetch(PDO::FETCH_OBJ);
if($cliente === FALSE){
  echo "no existe niguna persona con ese id";
  exit();
}
?>

<?php
require_once "vistas/parte_superior.php"; 
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2 class="mt-4">Editando al cliente <?php echo $cliente->cliente ?></h2>
            <form method="POST" action="update_cliente.php">
            
            <div class="form-group mt-3">
                <label for="id">Cliente</label>
                <input type="text" name="id" id="id" class="form-control" value="<?php echo $cliente->id ?>">
            </div>

            <div class="form-group mt-3">
                <label for="cliente">Cliente</label>
                <input type="text" name="cliente" id="cliente" class="form-control" value="<?php echo $cliente->cliente ?>">
            </div>

            <div class="form-group mt-3">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $cliente->telefono ?>">
            </div>

            <div class="form-group mt-3">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control" value="<?php echo $cliente->modelo ?>">
            </div>

            <div class="form-group mt-3">
                <label for="falla">Falla</label>
                <input type="text" name="falla" id="falla" class="form-control" value="<?php echo $cliente->falla ?>">
            </div>

            <div class="form-group mt-3">
                <label for="fecha_ingreso">Fecha de Ingreso</label>
                <input type="text" name="fecha_ingreso" id="fecha_ingreso" class="form-control" value="<?php echo $cliente->fecha_ingreso ?>">
            </div>

            <div class="form-group mt-3">
                <label for="fecha_entrega">Fecha Entrega</label>
                <input type="text" name="fecha_entrega" id="fecha_entrega" class="form-control" value="<?php echo $cliente->fecha_entrega ?>">
            </div>

            <div class="form-group mt-3">
                <label for="precio">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control" value="<?php echo $cliente->precio ?>">
            </div>

            <div class="form-group mt-3">
                <label for="imei">Imei</label>
                <input type="text" name="imei" id="imei" class="form-control" value="<?php echo $cliente->imei ?>">
            </div>

            <div class="form-group mt-3">
                <label for="estado">Estado</label>
                <input type="text" name="estado" id="estado" class="form-control" value="<?php echo $cliente->estado ?>">
            </div>

            <div class="form-group mt-3">
                <label for="observacion">Observacion</label>
                <textarea class="form-control" name="observacion" id="observacion" rows="3" value="<?php echo $cliente->observacion ?>"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary " value="Actualizar">
                <input type="hidden" class="btn btn-primary " value="<?php echo $cliente->id ?>">
            </div>
            
            <div class="form-group">
               <a href="index.php?pagina=1"><button type="button" class="btn btn-primary">Volver al inicio</button></a>
            </div>
            </form>
        </div>
    </div>
</div>

<?php
}
?>

<?php require_once "vistas/parte_inferior.php" ?>
