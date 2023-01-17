<?php
session_start();

if (!isset($_SESSION["nombre"])) {
    
} else {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <a href="cerrarsesion.php">Cerrar Sesion</a>
            <div>

                Hospital : 
                <input type="text" disabled="" name="nombre" value="<?php echo $_SESSION["nombre"] ?>"><br>
                Telefono:
                <input type="text" disabled="" name="tlf" value="<?php echo $_SESSION["telefono"] ?>"><br>
                Direccion:
                <input type="text" disabled="" name="direccion" value="<?php echo $_SESSION["direccion"] ?>">
            </div>
            <br><br><br><!-- comment -->

            <a href="nuevacita.php"> Solicitar cita médica</a><br><br><!-- comment -->
            <a href="listadomedicos.php"> Consulta de citas de su médico</a><br><br><!-- comment -->

        </body>
    </html>
<?php }
?>
