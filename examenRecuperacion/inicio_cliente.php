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

            <div>
                <h2>Hola <?php echo $_SESSION["nombre"] ?></h2>
            </div>

            <a href="cerrarsesion.php">Cerrar Sesion</a>

            <br><br>

            <h3>Mis cuentas</h3>

            <div>
                <table border="1">
                    <thead>
                    <td>Cuentas</td>
                    <td>Saldo</td>
                    <td>Historial</td>
                    <td>Transferencia</td>
                    </thead>
                    <?php
                    $cuentas = ControllerCuenta::findCuentas($_SESSION["dni"]);
                    if ($cuentas) {
                        foreach ($cuentas as $key => $value) {
                            echo "<tr>";
                            echo "<td> $value->iban</td>";
                            echo "<td> $value->saldo</td>";
                            echo "<td><button  name=historial>Historial</button></td>";
                            echo "<td><a href='transferencias.php?cuenta=" . $value->iban . "&saldo=" . $value->saldo . "'><button  name=transferencia>Transferencia</button></a></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </div>

            <div>
                <table border='1'>
                    <?php
                    if (isset($_POST['Historial'])) {
                        $historial = ControllerTransferencia::findTransferencias($value->iban);
                        foreach ($historial as $key => $v) {
                            echo "<tr>";
                            echo "<td> $v->iban</td>";
                            echo "<td> $v->saldo</td>";
                            echo "<td><button  name=historial>Historial</button></td>";
                            echo "<td><a href='transferencias.php?cuenta=" . $v->iban . "&saldo=" . $v->saldo . "'><button  name=transferencia>Transferencia</button></a></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </div>
            
        </body>
    </html>
    <?php
}
?>
