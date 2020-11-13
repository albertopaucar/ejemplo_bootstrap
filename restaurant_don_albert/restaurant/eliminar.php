<?php
include("conexion.php");
$menu = $_REQUEST['eliminar'];
mysqli_query($conexion,"DELETE FROM menu WHERE id_menu
=$menu");
echo "se ha eliminado el menu ".$menu;
 ?>
