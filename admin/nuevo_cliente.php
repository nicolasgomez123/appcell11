<?php
include("../bd/conexion.php");

if (isset($_POST['submit'])) {
    try{
    $cliente = array(
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
    );

    $consultaSQL = "INSERT INTO trabajos(cliente, telefono, modelo, falla, observacion, fecha_ingreso, fecha_entrega, precio, imei, estado) VALUES (:". implode(", :", array_keys($cliente)) . ")";

    $sentencia = $conexion->prepare($consultaSQL);
    $sentencia->execute($cliente);
}catch(PDOException $e){
    echo "el error es: ". $e;
}
}

?>


<?php 
require_once "vistas/parte_superior.php"; 
?>

<style>

    .formulario{
    position: relative;
    display: grid;
    grid-template-columns: repeat(2, 50%) ;
    padding: 40px;
    width: 730px;
    margin: auto;
    border: 1px solid #000;
    border-radius: 5px;
    }


    #submit{
        margin:20px 0 0 150px;
    }

    @media (max-width: 768px) {
        #submit{
        margin:20px 0 0 100px;
    }
    }

    .form-group{
    width: auto;
    margin: 5px;
}
</style>

<div class="container">
    <h1>Crear nuevo cliente</h1>
    
    <div class="row">
       <form method="POST" class="formulario">
            <div class="form-group mt-3">
                <label for="cliente">Cliente</label>
                <input type="text" name="cliente" id="cliente" class="form-control">
            </div>

            <div class="form-group mt-3">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" id="telefono" class="form-control">
            </div>

            <div class="form-group mt-3">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control">
            </div>

            <div class="form-group mt-3">
                <label for="falla">Falla</label>
                <input type="text" name="falla" id="falla" class="form-control">
            </div>

            <div class="form-group mt-3">
                <label for="fecha_ingreso">Fecha de Ingreso</label>
                <input type="text" name="fecha_ingreso" id="fecha_ingreso" class="form-control">
            </div>

            <div class="form-group mt-3">
                <label for="fecha_entrega">Fecha Entrega</label>
                <input type="text" name="fecha_entrega" id="fecha_entrega" class="form-control">
            </div>

            <div class="form-group mt-3">
                <label for="precio">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control">
            </div>

            <div class="form-group mt-3">
                <label for="imei">Imei</label>
                <input type="text" name="imei" id="imei" class="form-control">
            </div>

            <div class="form-group mt-3">
                <label for="estado">Estado</label>
                <input type="text" name="estado" id="estado" class="form-control">
            </div>

            <div class="form-group mt-3">
                <label for="observacion">Observacion</label>
                <textarea class="form-control" name="observacion" id="observacion" rows="3"></textarea>
            </div>


            <div class="form-group text-center mt-5">
                <input type="submit" name="submit" id="submit" class="btn btn-primary col-12" value="Enviar">
            </div>
       </form>
    </div>
</div>


<?php require_once "vistas/parte_inferior.php" ?>
