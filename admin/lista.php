<?php

$iniciar = ($_GET['pagina']-1)*$clientesPorPagina;
                $sql_clientes = "SELECT * FROM trabajos limit :iniciar,:clientes";
                $sentencia_clientes = $conexion->prepare($sql_clientes);
                $sentencia_clientes->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
                $sentencia_clientes->bindParam(':clientes', $clientesPorPagina, PDO::PARAM_INT);
                $sentencia_clientes->execute();
                $resultado_clientes = $sentencia_clientes->fetchAll(PDO::FETCH_OBJ);

?>