<?php 
include_once "../bd/conexion.php";

$resultado = [
    'error' => false,
    'mensaje' => ''
  ];

  if (!isset($_GET['id'])) {
    $resultado['error'] = true;
    $resultado['mensaje'] = 'El cliente no existe';
  }

if (isset($_POST['submit'])) {
    try{
        $cliente = [
            "id"            => $_GET['id'],
            "cliente"       => $_POST['cliente'],
            "telefono"      => $_POST['telefono'],
            "modelo"        => $_POST['modelo'],
            "falla"         => $_POST['falla'],
            "observacion"   => $_POST['observacion'],
            "fecha_ingreso" => $_POST['fecha_ingreso'],
            "fecha_entrega" => $_POST['fecha_entrega'],
            "precio"        => $_POST['precio'],
            "imei"          => $_POST['imei'],
            "estado"        => $_POST['estado']
        ];

        $consultaSQL = "UPDATE trabajos SET
        cliente         = :cliente,
        telefono        = :telefono,
        modelo          = :modelo,
        falla           = :falla,
        observacion     = :observacion,
        fecha_ingreso   = :fecha_ingreso,
        fecha_entrega   = :fecha_entrega,
        precio          = :precio,
        imei            = :imei,
        estado          = :estado,
        updated_at      =NOW()
        WHERE id        = :id";

        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute($cliente);
    }catch(PDOException $e){
        $resultado['error'] = true;
        $resultado['mensaje'] = $e->getMessage();
    }
}

try{
    $id = $_GET['id'];
    $consultaSQL = "SELECT * FROM trabajos WHERE id = $id";

    $sentencia = $conexion->prepare($consultaSQL);
    $sentencia->execute();

    $cliente = $sentencia->fetch(PDO::FETCH_ASSOC);

    if(!$cliente){
        $resultado['error']     = true;
        $resultado['mensaje']   = 'no se ha encontrado al cliente';
    }

}catch(PDOException $e){
    $resultado['error']     = true;
    $resultado['mensaje']   = $error->getMessage();
}
?>

<?php
require_once "vistas/parte_superior.php"; 
?>

<?php
if ($resultado['error']) {
  ?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $resultado['mensaje'] ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>

<?php
if (isset($_POST['submit']) && !$resultado['error']) {
  ?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-success" role="alert">
          El cliente ha sido actualizado correctamente
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>


<?php
if (isset($cliente) && $cliente) {
  ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2 class="mt-4">Editando al cliente <?= $cliente['cliente'] ?></h2>
            <form method="POST" action="editar_cliente.php">
            <div class="form-group mt-3">
                <label for="cliente">Cliente</label>
                <input type="text" name="cliente" id="cliente" class="form-control" value="<?= $cliente['cliente'] ?>">
            </div>

            <div class="form-group mt-3">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="<?= $cliente['telefono'] ?>">
            </div>

            <div class="form-group mt-3">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control" value="<?= $cliente['modelo'] ?>">
            </div>

            <div class="form-group mt-3">
                <label for="falla">Falla</label>
                <input type="text" name="falla" id="falla" class="form-control" value="<?= $cliente['falla'] ?>">
            </div>

            <div class="form-group mt-3">
                <label for="fecha_ingreso">Fecha de Ingreso</label>
                <input type="text" name="fecha_ingreso" id="fecha_ingreso" class="form-control" value="<?= $cliente['fecha_ingreso'] ?>">
            </div>

            <div class="form-group mt-3">
                <label for="fecha_entrega">Fecha Entrega</label>
                <input type="text" name="fecha_entrega" id="fecha_entrega" class="form-control" value="<?= $cliente['fecha_entrega'] ?>">
            </div>

            <div class="form-group mt-3">
                <label for="precio">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control" value="<?= $cliente['precio'] ?>">
            </div>

            <div class="form-group mt-3">
                <label for="imei">Imei</label>
                <input type="text" name="imei" id="imei" class="form-control" value="<?= $cliente['imei'] ?>">
            </div>

            <div class="form-group mt-3">
                <label for="estado">Estado</label>
                <input type="text" name="estado" id="estado" class="form-control" value="<?= $cliente['estado'] ?>">
            </div>

            <div class="form-group mt-3">
                <label for="observacion">Observacion</label>
                <textarea class="form-control" name="observacion" id="observacion" rows="3" value="<?= $cliente['observacion'] ?>"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Actualizar">
            </div>
            </form>
        </div>
    </div>
</div>
<?php
}
?>



<?php require_once "vistas/parte_inferior.php" ?>
