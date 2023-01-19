<?php
require_once './Controllers/ControllerTransferencia.php';
require_once './Controllers/ControllerCuenta.php';
require_once './Controllers/Conexion.php';

session_start();
if (!isset($_SESSION["dni"])) {
    header("location:index.php");
} else {
    ?>

    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <h2>Hola <?php echo $_SESSION["nombre"] ?></h2>
        </div>

        <br><br>

        <p>Origen: <?php echo $_GET["cuentaOrigen"] ?></p>

        <p>Destino: <?php echo $_GET["cuentaDestino"] ?></p>

        <p>Cantidad: <?php echo $_POST["cantidad"] ?></p>

        <p>Comisión: <?php echo "" ?></p>

        <p>Saldo anterior: <?php echo $_GET["saldo"] ?></p>

        <p>Saldo posterior: <?php echo ($_GET["saldo"]) ?></p>



        <input type="button" value="Confirmar" /></a>

        <br><br>

        <a href="cerrarsesion.php"><input type="button" value="Cerrar Sesion" /></a>

        <br><br>

        <a href="inicio_cliente.php"><input type="button" value="Volver" /></a>
        <?php
        if (isset($_POST['Confirmar'])) {
        $transferencia = ControllerTransferencia::newTransferencia($_GET["cuentaOrigen"], $_GET["cuentaDestino"], $fecha, $cantidad);
}
        ?>
        
    </body>
    </html>
    <?php
}
?>
