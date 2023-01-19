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

        <a href="cerrarsesion.php">Cerrar Sesion</a>

        <br><br>

        <h3>Tramitar Transferencia</h3>
        <p>Origen: 
            <?php
            $cuentaOrigen = $_GET["cuenta"];
            echo $cuentaOrigen;
            ?></p>

        <p>Saldo: <?php echo $_GET["saldo"] ?></p>


        Cuentas:
        <select name="select">
            <?php
            $cuentas = ControllerCuenta::findAllCuentas();
            if ($cuentas) {
                foreach ($cuentas as $key => $value) {
                    echo "<option value='$value->iban'>$value->iban --- </option>";
                }
            }
            ?>
        </select>  

        <br><br>

        Cantidad:
        <input id="cantidad" name="cantidad" type="number" min="0" value="0" />
        
        <br><br>

        <?php
        echo "<td><a href='validar_transferencia.php?cuentaOrigen=" . $cuentaOrigen . "&cuentaDestino=" . $value->iban . "&saldo=" . $value->saldo . "'><button  name=transferencia>Transferencia</button></a></td>";
        ?>

        <br><br>

        <a href="inicio_cliente.php"><input type="button" value="Volver" /></a>
    </body>
    </html>
    <?php
}
?>

