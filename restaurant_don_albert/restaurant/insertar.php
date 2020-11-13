<?php
include("conexion.php");
$menu = $_REQUEST['nom_menu'];
$desc = $_REQUEST['descripcion'];
$tipo = $_REQUEST['tipo_menu'];
$precio = $_REQUEST['precio'];

mysqli_query($conexion,"INSERT INTO menu (nom_menu,descripcion,tipo_menu,precio)
VALUES('$menu','$desc','$tipo','$precio')");

mysqli_close($conexion);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
      <a href="index.html">inicio</a>
 </body>
 </html>
