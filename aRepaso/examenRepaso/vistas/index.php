<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            session_start();
            if (isset($_SESSION['usuario'])) {
                header("location:menu.php");
            }

            require_once './Controller/ControllerHospital.php';
            $intentos = 0;
            if (isset($_POST['acceder'])) {
                $intentos = ControllerHospital::iniciarSesion();
                if ($intentos == 0) {
                    header("location:menu.php");
                }
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
                            <div class="col-12">
                                <h1>GESTOR HOSPITALES</h1>
                            </div>
                            <div class="col-12">

                                <?php
                                if (isset($_POST['acceder'])) {
                                    $quedan = 3;
                                    if ($intentos >= 3) {
                                        ?>
                                        <div class="alert alert-danger">
                                            El usuario al que desea acceder ha sido bloqueado.
                                        </div>
                                        <?php
                                    } else if ($intentos > 0 && $intentos < 3) {
                                        ?>
                                        <div class="alert alert-danger">
                                            Te quedan <?php echo $quedan - $intentos; ?> intentos.
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>

                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text col-2 justify-content-end">Usuario:</span>
                                    <input type="text" class="form-control" name="user">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text col-2 justify-content-end">Clave:</span>
                                    <input type="password" class="form-control" name="pass">
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <input type="submit" name="acceder" value="Acceder" class="btn btn-primary">
                            </div>

                        </div>
                    </form>


                </div>

            </div>
        </body>
    </html>
