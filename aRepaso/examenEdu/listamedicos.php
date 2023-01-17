<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:index.php");
}

if (isset($_POST['volver'])) {
    header("location:menu.php");
}

require_once './Controller/ControllerMedico.php';
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
                <form action="" method="POST">


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
                            <div class="col-4 text-end d-block">
                                <?php
                                if (isset($_SESSION['usuario'])) {
                                    echo "<input type='submit' name='cerrarSesion' value='Cerrar Sesion' class='btn btn-dark'> ";
                                    echo "<input type='submit' name='volver' value='Volver' class='btn btn-dark'>";
                                }
                                ?>
                            </div>
                        </div>
                </form>
                <table class="table mt-5">
                    <thead>
                        <tr class="table-dark pt-5">
                            <th>Nombre</th>
                            <th>Especialidad</th>
                            <th>Citas</th>
                        </tr>
                    </thead>
                    <?php
                    $medicos = ControllerMedico::buscarMedicosPorHospital();
                    if ($medicos) {
                        foreach ($medicos as $m) {
                            echo "<form method='POST' action='citas.php'>"
                            . "<tr>"
                            . "<td>" . $m->nombre . "</td>"
                            . "<td>" . $m->especialidad . "</td>";

                            echo "<td><button class='btn btn-primary' name=citas>Mis citas</button></td>";
                            echo "<input type=hidden name=dni value=" . $m->dni . ">";
                            echo "<input type=hidden name=nombre value='" . $m->nombre . "'>"
                            . "</tr>"
                            . "</form>";
                        }
                    }
                    ?>
            </div>


        </div>

    </div>
</body>
</html>
