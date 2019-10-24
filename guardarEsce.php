<?php
	include("conexion.php");


	
	$nombres = $_POST['nombres'];
	$capacidad = $_POST['capacidad'];
	$ubicacion = $_POST['ubicacion'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

	$query = "INSERT INTO escenario ( nombre,capacidad, ubicacion, correo, telefono, imagen) VALUES ('$nombres', '$capacidad', '$ubicacion', '$correo', '$telefono', '$imagen')";
	
	$resultado = $conexion -> query($query); 


?>