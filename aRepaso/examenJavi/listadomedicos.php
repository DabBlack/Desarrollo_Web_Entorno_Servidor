<?php
require_once './Controllers/MedicoController.php';
session_start();
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

            <table border="1">
                <thead>
                <td> Nombre</td>
                <td> Especialidad</td>
                <td> Citas</td>
                </thead>
                <?php
                $medicos = MedicoController::findAllMedicosFromHospital($_SESSION["nombre"]);
                foreach ($medicos as $key => $value) {
                    echo "<tr>";
                    echo "<td> $value->nombre </td>";
                    echo "<td> $value->especialidad </td>";
                    echo "<td><a href='citas.php?nombre=".$value->nombre."'><button  name=citas>MisCitas</button></a></td>";

                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>
<?php
}
?>
