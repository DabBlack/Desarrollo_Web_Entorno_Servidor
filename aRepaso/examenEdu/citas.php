<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:index.php");
}
require_once './Controller/ControllerHospital.php';
require_once './Controller/ControllerMedico.php';
require_once './Controller/ControllerAtiende.php';
if (isset($_POST['acceder'])) {
    $dentro = ControllerHospital::iniciarSesion();
    if (!$dentro) {
        if ($dentro > 0 && $dentro < 3) {
            header("location:index.php?fallo=$dentro");
        } else {
            header("location:index.php?fallo=bloqueado");
        }
    }
}

if(isset($_POST['volver'])) {
    header("location:menu.php");
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
                                    echo "<input type='submit' name='cerrarSesion' value='Cerrar Sesion' class='btn btn-dark'> ";
                                    echo "<input type='submit' name='volver' value='Volver' class='btn btn-dark'>";
                                }
                                ?>
                            </div>
                        </div>
                        
                        <?php
                        if (isset($_POST['dni'])) {
                            $citas = ControllerAtiende::buscarCitasPorMedico();
                            ?>
                        <div class="col-12">
                            <h3>Pacientes con cita del <?php echo $_POST['nombre']; ?> con dni : <?php echo $_POST['dni']; ?></h3>
                        </div>
                            <table class="table mt-5">
                                <thead>
                                    <tr class="table-dark pt-5">
                                        <th>NSS</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Consulta</th>
                                        <th>Volante</th>
                                    </tr>
                                </thead>
                                <?php
                                if ($citas) {
                                    while ($m=$citas->fetchObject()) {
                                        echo "<form method='POST' action=''>"
                                        . "<tr>"
                                        . "<td>" . $m->nss . "</td>"
                                        . "<td>" . $m->fecha . "</td>"
                                        . "<td>" . $m->hora . "</td>"
                                        . "<td>" . $m->consulta . "</td>"
                                        . "<td><a href=vistaVolante.php?img=".$m->volante.">Ver Volante</a></td>"
                                        . "</tr>"
                                        . "</form>";
                                    }
                                }
                                ?>
                            </table>
                            <?php
                        }
                        ?>

                    </div>
                </form>


            </div>

        </div>
    </body>
</html>
