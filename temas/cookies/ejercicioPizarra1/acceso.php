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
        <?php 
            $pass=md5("Antonio");        
        
        ?>
        <form method="POST">
            Usuario: <input type="text" name="nombre">
            <br><br>
            Contraseña: <input type="password" name="password">
            <br><br>
            <input type="checkbox"> Recordar credenciales
            <br><br>
            <input type="submit" name="entrar" value="Entrar">
            <br>
            <a href="registro.php">¿No tienes cuenta? Regístrate</a>
        </form>
        
        <?php

        ?>
    </body>
</html>
