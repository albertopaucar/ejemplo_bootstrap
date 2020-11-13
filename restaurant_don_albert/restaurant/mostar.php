<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
	 <meta charset="utf-8">
	 <title></title>
 </head>
 <marquee behavior="alternate"><h1 class="titulo">Restaurant Don albert </marquee></h1>
<header class="header_inicio">
<div>
<img  class= "logo" src="img/cuy.jpg" title="restaurant don albert">
</div>
</header>
 <body>
<h1>mostrar datos datos </h1>
<h2>nom_menu//descripcion//tipo_menu//precio</h2>
 </body >
</html>

<?php
	include("conexion.php");

	$consulta = mysqli_query($conexion, "SELECT * FROM menu");

	while ($consul = mysqli_fetch_array($consulta)) {
		echo $consul['nom_menu']." ".$consul['descripcion']." ".$consul['tipo_menu']." ".$consul['precio'];
		echo "<br>";
	}
	mysqli_close($conexion);
  "----------------------------------------------------------------"
 ?>
