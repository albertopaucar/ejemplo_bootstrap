<?php
include("conexion.php");
$nombre = $_REQUEST['buscar'];
$consulta = mysqli_query($conexion,"SELECT * FROM
   menu WHERE id_menu ='$nombre'");
   while ( $reg =mysqli_fetch_array($consulta)) {
     echo $reg['nom_menu'];
     echo "<br>";
      echo $reg['descripcion'];
       echo "<br>";
        echo $reg['tipo_menu'];
         echo "<br>";
          echo $reg['precio'];

  mysqli_close ($conexion);
   }
 ?>
