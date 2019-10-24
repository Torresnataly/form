<!DOCTYPE html>
<html lang="en">
<?php
    include("conexion.php");
?>
    <head>
        <meta charset="utf-8">
        <!--FULL-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>formulario  Escenario</title>
        <meta name="description" content="">
        <meta name="author" content="satur">

        <meta name="viewport" content="width=device-width; initial-scale=1.0">

        <link rel="stylesheet" href="css/formularios.css">
    </head>
    <body>
        <div id="form-cont">
            <form class="formulario"  autocomplete="off" method="post"   action="guardarEsce.php" enctype="multipart/form-data" >
                <h1>Escenario</h1>

                <label for="">Nombre</label>
                <input type="text"  placeholder="Nombre" name="nombres" class="desplazar input focus" /><br>
                
                
                <label for="">Capacidad</label>
                <input type="text"  placeholder="Capacidad"  name="capacidad" class="desplazar input focus"/><br>
                
                <label for="">Ubicacion</label>
                <input type="text"  placeholder="Ubicacion" name="ubicacion" class="desplazar input focus"/><br>
                
                 <label for="">Correo</label>
                <input type="text"  placeholder="Correo"  name="correo" class="desplazar input focus"/><br>

                 <label for="">Telefono</label>
                <input type="text"  placeholder="Telefono"  name="telefono" class="desplazar input focus"/><br> 
                     
                <label for="">Imagen del Escenario</label>
                <div class="div_file">
                    <img src="nube.png" class="logo_archivo" alt="">
                    <p class="texto"> Seleccionar archivo</p>
                    <input class="file" type="file" id="btn_enviar" name="imagen">
                </div><br>
                
                <input type="submit" value="¡Regístrar Escenario!" class="btn"><br><br>

            </form>
        </div>
    </body>
</html>