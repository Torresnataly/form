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
<form class="formulario"  method="post"   action="guardar.php" autocomplete="off" enctype="multipart/form-data">
                <h1>Escenario</h1>

                <label for="">Seudominio</label>
                <input type="text"  name="seudonimo" placeholder="Seudominio" class="desplazar input focus" /><br>
                
                
                <label for="">Nombre</label>
                <input type="text"    name="nombre" placeholder="Nombre" class="desplazar input focus"/><br>
                
                <label for="">Apellido</label>
                <input type="text"  name="apellido" placeholder="Apellido" class="desplazar input focus"/><br>
                
                <label for="">Genero</label>
                <select name="genero" id="" class="select focus" value="kljafl">
                    <option value="">Seleccione Genero</option>
                    <option value="">Femenino</option>
                       <option value="">Masculino</option>
                </select>
                 <label for="">Manager</label>
                <input   type="text" name="manager" placeholder="Manager" class="desplazar input focus"/><br> 
                   
                <label for="">Telefono</label>
                <input type="text"  name="telefono" placeholder="Telefono" class="desplazar input focus"/><br>

                <label for="">Correo</label>
                <input type="text"  name="correo" placeholder="Correo" class="desplazar input focus"/><br> 
                  
                    
                <label for="">Imagen</label>
                <div class="div_file">
                    <img src="nube.png" class="logo_archivo" alt="">
                    <p class="texto"> Seleccionar archivo</p>
                    <input class="file" type="file" id="btn_enviar" name="imagen"/>
                </div><br>
                
                <input type="submit" value="¡Regístrar!" class="btn"><br><br>

            </form>
        </div>
    </body>
</html>
