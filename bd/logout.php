<?php
session_start();
unset ($_SESSION["s_idRoL"]);
unset ($_SESSION["s_rol_descripcion"]);
unset($_SESSION["s_usuario"]);
session_destroy();
header("Location: ../index.php?pagina=1")
?>