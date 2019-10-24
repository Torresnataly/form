<?php
	include("conexion.php");


	$seudonimo = $_POST['seudonimo'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$genero = $_POST['genero'];
	$manager = $_POST['manager'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];

	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

	$query = "INSERT INTO artistas (seudonimo, nombre, apellido, genero, manager, telefono, correo, imagen) VALUES ('$seudonimo', '$nombre', '$apellido', '$genero', '$manager', '$telefono', '$correo', '$imagen')";
	
	$resultado = $conexion -> query($query); 


?>