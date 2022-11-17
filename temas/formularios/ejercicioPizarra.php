<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="ejercicioPizarra.php" method="POST">
            Nombre: <input type="text" name="nombre"> <br><br>
            Apellidos: <input type="text" name="apellidos">
                <?php
                    if(empty($_POST['apellidos'])) {
                    echo 'Debe incluir un apellido'; 
                    }
                ?> 
            <br><br>
            Sexo:
            <input type="radio" name="sexo" value="hombre">Hombre
            <input type="radio" name="sexo" value="mujer">Mujer <br><br>
            Estado Civil:
            <input type="radio" name="estado" value="soltero">Soltero
            <input type="radio" name="estado" value="casado">Casado
            <input type="radio" name="estado" value="otro">Otro <br><br>
            
            Aficiones:<br>
            <input type="checkbox" name="aficiones" value="cine">Cine
            <input type="checkbox" name="aficiones" value="lectura">Lectura
            <input type="checkbox" name="aficiones" value="television">Televisión <br>
            <input type="checkbox" name="aficiones" value="deporte">Deporte
            <input type="checkbox" name="aficiones" value="musica">Música
            <input type="checkbox" name="aficiones" value="internet">Internet <br><br>
            
            Estudios:
            <select multiple="estudios">
                <option value="eso">ESO</option>
                <option value="bachillerato">Bachillerato</option>
                <option value="cfgm">CFGM</option>
                <option value="cfgs">CFGS</option>
                <option value="universidad">Universidad</option>
            </select> <br><br>
            
            Edad:
            <select name="edad">
                <option value="1y14">Entre 1 y 14</option>
                <option value="15y25">Entre 15 y 25</option>
                <option value="26y35">Entre 26 y 35</option>
                <option value="mayor35">Mayor de 35</option>
            </select> <br><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        

    </body>
</html>
