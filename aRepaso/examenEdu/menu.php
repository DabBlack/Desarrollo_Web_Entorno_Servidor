<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:index.php");
}

require_once './Controller/ControllerAtiende.php';
$cita = false;
if (isset($_POST['registrar'])) {
    $cita = ControllerAtiende::crearCita();
}

if (isset($_POST['cerrarSesion'])) {
    session_unset();
    session_destroy();
    setcookie(session_name(), "", time() - 60, "/");
    header("location:index.php");
}
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
                <form action="#" method="POST">
                    <div class="col-8">
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
                                    echo "<input type='submit' name='cerrarSesion' value='Cerrar Sesion' class='btn btn-dark'>";
                                }
                                ?>
                            </div>
                        </div>
                        <?php if ($cita != false) { ?>
                            <br>
                            <div class="alert alert-info">
                                El <?php echo $_POST['nombre']; ?> tiene cita el dia <?php echo $_POST['fecha']; ?> a la hora <?php echo $_POST['hora']; ?> en la consulta <?php echo $_POST['consulta'] ?>.
                            </div>
    <?php
}
?>
                        <div class="col-12 text-center">
                            <a href="nuevacita.php"><h3>Solicitar cita médica</h3></a>
                        </div>
                        <div class="col-12 text-center">
                            <a href="listamedicos.php"><h3>Consultar citas médicos</h3></a>
                        </div>
                    </div>
                </form>


            </div>

        </div>
    </body>
</html>
