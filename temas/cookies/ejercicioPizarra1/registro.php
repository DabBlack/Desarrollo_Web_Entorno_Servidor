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
        $conexion = @new mysqli("localhost","registros","abc123","registros");
        if(!$conexion->connect_errno) {
            $error=$conexion->connect_error;
        }
        ?>
        <form method="POST">
            Nombre: <input type="text" name="nombre">
            <br><br>
            Apellidos: <input type="text" name="apellidos">
            <br><br>
            Nombre de Usuario: <input type="text" name="nombre_usuario">
            <br><br>
            Contraseña: <input type="password" name="contraseña">
            <br><br>
            <input type="submit" name="registro" value="Registrarse">
            <br><br>
            <a href="acceso.php">Volver</a>
        </form>
        
        <?php
            $stmt = $conexion->stmt_init();
            if(1<2) {
                $registrar = $conexion->query("INSERT INTO `usuarios_registrados`"
                . " (`id`, `nombre`, `apellidos`, `usuario`, `contraseña`)"
                . " VALUES (NULL, '', '', '', '');");                
            }
            
        ?>
    </body>
</html>
