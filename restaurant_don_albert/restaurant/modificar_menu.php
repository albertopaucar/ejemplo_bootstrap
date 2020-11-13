<!DOCTYPE html>
<html>
<head>
	<title>Formulario a modificar</title>
</head>
<marquee behavior="alternate"><h1 class="titulo">Restaurant Don albert </marquee></h1>
<header class="header_inicio">
<div>
<img  class= "logo" src="img/cuy.jpg" title="restaurant don albert">
</div>
</header>
<body background ="img/fondo.jpeg">

	<h1>modificar menu</h1>
	<form action="modificar.php" method="POST">
		<input type="text" name="id_menu" placeholder="el id se corregirá">
		<input type="text" name="nom_menu" placeholder="el nombre se corregirá">
		<input type="text" name="descripcion" placeholder="descripcion a corregir">
		<input type="text" name="tipo_menu" placeholder="ripo_menu a corregir">
		<input type="text" name="precio" placeholder="precio a corregir">
		<input type="submit" name="modificar" value="Modificar">
	</form>
</body>
</html>
