<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $conexion = new mysqli("localhost","dwes","abc123.","dwes");
            $conexion->set_charset("utf8mb4");
            $error=$conexion->query("INSERT INTO tienda(cod,nombre,tlf) VALUES (4,'SUCURSAL3',123456789)");
            echo $conexion->error;
            if($error) echo "Registro insertado correctamente.";
            else echo "No funciona";
        ?>
    </body>
</html>
