<?php
        include "bd/conexion.php";
        

        if (isset($_POST['submit2'])){

       $codigo = $_POST['codigo'];
        
        $sentencia = $conexion->query("SELECT * FROM trabajos where id = '$codigo' LIMIT 1 ");
        $clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
        

      ?>
      
      <div class="datos">

      <?php
         foreach($clientes as $cliente){
      ?>
        <form class="form-datos">
        
          <label for="">Cliente</label>
            <input class="mb-3 form-control disabled" value="<?php echo $cliente->cliente?>"disabled >
    
            <label for="">Modelo</label>
            <input type="" id="" class="mb-4 form-control" value="<?php echo $cliente->modelo?>" disabled>
    
            <label for="">Falla</label>
            <input type="" id="" class="mb-4 form-control" value="<?php echo $cliente->falla?>" disabled>
      
            <label for="">Precio</label>
            <input type="" id="" class="mb-4 form-control" value="<?php echo $cliente->precio?>" disabled>
    
            <label for="">Estado</label>
            <input type="" id="" class="mb-4 form-control"value="<?php echo $cliente->estado?>" disabled>
        </form>
        <?php
          }
        ?>
        <?php
        }else{
          ?>
          <form class="form-datos d-none">
        
          <label for="">Cliente</label>
            <input class="mb-4 form-control" value=" " disabled>
    
            <label for="">Modelo</label>
            <input type="" id="" class="mb-4 form-control" value="">
    
            <label for="">Falla</label>
            <input type="" id="" class="mb-4 form-control" value="">
      
            <label for="">Precio</label>
            <input type="" id="" class="mb-4 form-control" value="">
    
            <label for="">Estado</label>
            <input type="" id="" class="mb-4 form-control"value="">
        </form>
        <?php } ?>