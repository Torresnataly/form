<!DOCTYPE html>
<html lang="en">
<?php
    include("conexion.php");
?>
    <head>
        <meta charset="utf-8">
        <!--FULL-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>formularios2</title>
        <meta name="description" content="">
        <meta name="author" content="satur">

        <meta name="viewport" content="width=device-width; initial-scale=1.0">

        <link rel="stylesheet" href="css/formularios.css">
    </head>
    <body>
        <div id="form-cont">
           <form class="formulario"  method="post"   action="guardarEvent.php" autocomplete="off" enctype="multipart/form-data">
                 <h1>Crear nuevo evento</h1>

                <label for="">Titulo</label>
                <input type="text"  placeholder="Titulo del evento" name="Titulo" class="desplazar input focus" /><br>
                
                <label for="">Escenario</label>
                <select name="escenario" id="" class="select focus"  value="kljafl">
                    <option value="">Seleccione el escenario</option>
                    <option value="">Opción 1</option>
                </select>
                
                <label for="">Fecha del evento</label>
                <input type="date" name="fecha" class="desplazar input focus" min="2019-10-01" /><br>
                
                <label for="">Hora</label>
                <input type="time"  name="hora" placeholder="Hora del evento" class="desplazar input focus"/><br>
                
                <label for="">Artistas en escena</label>
                <textarea rows="" cols="150" value=""  name="artistas" class="correo input desplazar textarea-small focus" placeholder="Artistas en escena" ></textarea>   
                
                <label for="">Descripción del evento</label>
                <textarea rows="5" cols="150" value=""  name="descripcion" class="correo input desplazar textarea focus" placeholder="Descripción del evento" ></textarea>   
                     
                <label for="">Imagen del evento</label>
                <div class="div_file">
                    <img src="nube.png" class="logo_archivo" alt="">
                    <p class="texto"> Seleccionar archivo</p>
                    <input class="file" type="file" id="btn_enviar" name="imagen">
                </div><br>
                
                <input type="submit" value="¡Regístrar evento!" class="btn"><br><br>

            </form>
        </div>
    </body>
</html>