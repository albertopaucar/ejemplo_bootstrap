<?php
	include ("conexion.php");
	$id = $_REQUEST['id_menu'];
	$nom_menu = $_REQUEST['nom_menu'];
	$desc = $_REQUEST['descripcion'];
	$tipo = $_REQUEST['tipo_menu'];
	$precio = $_REQUEST['precio'];

	mysqli_query($conexion, "UPDATE menu SET nom_menu = '$nom_menu',descripcion = '$desc',tipo_menu = '$tipo',precio = '$precio' WHERE id_menu = '$id'");

	echo "Se ha modificado correctamente";
	mysqli_close($conexion);
 ?>
