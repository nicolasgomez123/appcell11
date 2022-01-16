<?php require_once "vistas/parte_superior.php"; ?>

<!doctype html>
<html lang="es">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">

  </head>
  <body>
      
        <!--CONTENT-HEADER-->
      <section class="content-header">

        <div class="container-fluid">

          <div class="row mb-2">

          <div class="col-sm-6">
            <h1>Administrador de clientes</h1>
          </div>

          <div class="col-sm-6">
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

        <table class="table  table-light" id="tblClientes">
            <thead class=" thead-dark">
              <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Telefono</th>
                <th>Modelo</th>
                <th>Falla</th>
                <th>Observacion</th>
                <th>Estado</th>
                <th>Fecha de Ingreso</th>
                <th>Fecha de Entrega</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Imei</th>
              </tr>
            </thead>
        </table>

      </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>

<?php require_once "vistas/parte_inferior.php" ?>
