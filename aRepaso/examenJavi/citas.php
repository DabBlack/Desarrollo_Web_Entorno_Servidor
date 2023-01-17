<?php
session_start();
require_once './Controllers/MedicoController.php';
require_once './Controllers/AtenderController.php';
if (!isset($_SESSION["nombre"])){
    header("location:index.php");
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

        <div>
            <?php
            $medicos = MedicoController::findAllMedicosFromHospital($_SESSION["nombre"]);

            echo "PACIENTES CON CITA DEL DOCTOR --" . $_GET["nombre"];
            ?>
            <table border="1">
                <thead>
                <td> NSS</td>
                <td> Nombre</td>
                <td> Telefono</td>
                <td> Fecha</td>
                <td> Hora</td>
                <td> Nº Consulta</td>
                <td> Volante</td>

                </thead>
                <?php
                $cita = MedicoController::findCitasByMedico($_GET["nombre"]);
                if ($cita) {
                    
                    while ($fila = $cita->fetchObject()) {
                        echo "<tr>";
                        echo "<td>" . $fila->nss . "</td>";
                        echo "<td>" . $fila->nombre . "</td>";
                        echo "<td>" . $fila->telefono . "</td>";
                        echo "<td>" . $fila->fecha . "</td>";
                        echo "<td>" . $fila->hora . "</td>";
                        echo "<td>" . $fila->consulta . "</td>";
                        echo "<td><img src='Imagenes/$fila->volante' width=200 heigth=200></img></td>";

                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "</table>";
                    echo "El médico seleccionado, no tiene ninguna cita actualmente.";
                }
                ?>

        </div>
    </body>
</html>
<?php 
}
?>
