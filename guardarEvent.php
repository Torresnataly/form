<?php
	include("conexion.php");


	$titulo = $_POST['titulo'];
	$escenario = $_POST['escenario'];
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$artistas = $_POST['artistas'];
	$descripcion = $_POST['descripcion'];
	
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

	$query = "INSERT INTO Eventos (titulo, escenario, fecha, hora, artistas, descripcion, imagen) VALUES ('$titulo', '$escenario', '$fecha', '$hora', '$artistas',  '$descripcion', '$imagen')";
	
	$resultado = $conexion -> query($query); 


?>