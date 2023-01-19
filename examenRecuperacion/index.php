<?php
require_once './Controllers/ControllerUsuario.php';
require_once './Models/Usuario.php';

if (isset($_POST["entrar"])) {
    $encriptada = md5($_POST['pass']);
    $u = ControllerUsuario::findUsuario($_POST["user"], $encriptada);
    $error = "";
    if (isset($u)){
        session_start();
        $_SESSION["nombre"] = $u->nombre;
        $_SESSION["direccion"] = $u->direccion;
        $_SESSION["telefono"] = $u->telefono;
        $_SESSION["dni"] = $u->dni;
        $_SESSION["clave"] = $u->clave;
        header("location:inicio_cliente.php");
    }else {
        $error = "Nombre de usuario o clave incorrecto";
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
                            <?php
                                if (isset($_POST["aceptar"])) {
                                    echo "<br>" . $error;
                                }
                            ?>
                        </div>
                        <div class="col-12">
                            <h1>LOGIN</h1>
                        </div>

                        <div class="col-12">
                            <div class="input-group mb-3">
                                <span class="input-group-text col-2 justify-content-end">DNI:</span>
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
                            <input type="submit" name="entrar" value="Entrar" class="btn btn-primary">
                        </div>

                    </div>
                </form>


            </div>

        </div>
    </body>
</html>
