<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:index.php");
}
require_once './Controller/ControllerPaciente.php';
$dentro = 0;
if (isset($_POST['buscar'])) {
    $dentro = ControllerPaciente::buscarPaciente();
}

if (isset($_POST['volver'])) {
    header("location:menu.php");
}

if (isset($_POST['cerrarSesion'])) {
    session_unset();
    session_destroy();
    setcookie(session_name(), "", time() - 60, "/");
    header("location:index.php");
}
require_once './Controller/ControllerMedico.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="col-8 ">
                        <div class="col-12 d-flex">
                            <div class="col-8 text-start">
                                <?php
                                if (isset($_SESSION['usuario'])) {
                                    echo "<h2>" . $_SESSION['usuario']->nombre_H . "</h2>";
                                    echo "Telf: " . $_SESSION['usuario']->telefono . "<br>";
                                    echo "Direc: " . $_SESSION['usuario']->direccion;
                                }
                                ?>
                            </div>
                            <div class="col-4 text-end">
                                <?php
                                if (isset($_SESSION['usuario'])) {
                                    echo "<input type='submit' name='cerrarSesion' value='Cerrar Sesion' class='btn btn-dark'> ";
                                    echo "<input type='submit' name='volver' value='Volver' class='btn btn-dark'>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-12 text-center p-3">
                            <h4>NSS del paciente: </h4>
                            <input type="text" name="nss">
                        </div>

                        <div class="col-12 text-center">
                            <input type='submit' name='buscar' value='Buscar' class='btn btn-primary'>
                        </div>
                        <div class="col-12 text-center p-3">
                            <?php
                            if (!isset($_SESSION["paciente"]) && $dentro == false) {
                                echo "<div class='alert alert-danger'>";

                                echo "El paciente buscado no existe en la base de datos.";
                                echo "</div>";
                            }
                            ?>
                        </div>
                </form>
                <form action="menu.php" method="POST" enctype="multipart/form-data">
                    <hr>
                    <?php
                    $medicos = ControllerMedico::buscarMedicosPorHospital();
                    if (isset($_SESSION['paciente']) && $dentro == 1) {
                        ?>
                        <div class="col-12 d-flex">
                            <div class="col-6">
                                <h3>Paciente</h3>
                                <p><b>NSS:</b> <?php echo $_SESSION['paciente']->nss; ?></p>
                                <input type="hidden" name="nss" value="<?php echo $_POST['nss']; ?>">
                                <p><b>Nombre:</b> <?php echo $_SESSION['paciente']->nombre; ?></p>
                                <input type="hidden" name="nombre" value="<?php echo $_SESSION['paciente']->nombre; ?>">
                                <p><b>Fecha Nacimiento:</b> <?php echo $_SESSION['paciente']->fecha_nac; ?></p>
                                <p><b>Domicilio:</b> <?php echo $_SESSION['paciente']->domicilio; ?></p>
                                <p><b>Telefono:</b> <?php echo $_SESSION['paciente']->telefono; ?></p>
                                <p><b>Provincia:</b> <?php echo $_SESSION['paciente']->provincia; ?></p>
                                <p><b>Pais:</b> <?php echo $_SESSION['paciente']->pais; ?></p>
                                <p><b>Saldo:</b> <?php echo $_SESSION['paciente']->saldo; ?></p>
                                <input type="hidden" name="saldo" value="<?php echo $_SESSION['paciente']->saldo; ?>">
                            </div>

                            <div class="col-6">
                                <h3>Datos consulta</h3>
                                <p><b>Elegir médico</b></p>
                                <select name="medico">
                                    <?php
                                    if ($medicos != false) {
                                        foreach ($medicos as $m) {
                                            echo "<option value='" . $m->dni . "'>" . $m->nombre . " - " . $m->especialidad . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                <br>
                                <br>

                                <p><b>Consulta:</b> <input type="text" name="consulta" value="09"></p>
                                <p><b>Fecha:</b> <input type="date" name="fecha" value="2022-12-15"></p>
                                <p><b>Hora:</b> <input type="time" name="hora" value="13:05:00"></p>
                                <p><b>Adjuntar volante</b></p>
                                <input type="file" name="volante">
                            </div>
                            <br>
                        </div>

                        <div class="col-12 text-end">
                            <input type="submit" class="btn btn-primary" name="registrar" value="Registrar Cita" <?php if ($_SESSION['paciente']->saldo <= 0) echo "disabled"; ?>>
                        </div>


                        <?php
                    }
                    ?>

                </form>
            </div>

        </div>

    </div>
</body>
</html>
