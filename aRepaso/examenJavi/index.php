<?php
require_once './Controllers/HospitalController.php';

if (isset($_POST["aceptar"])) {
    $h = HospitalController::findHospital($_POST["usuario"], $_POST["pass"]);
    $error = "";
    if (isset($h)){
        session_start();
        $_SESSION["nombre"] = $h->nombre_H;
        $_SESSION["direccion"] = $h->direccion;
        $_SESSION["telefono"] = $h->telefono;
        $_SESSION["usuario"] = $h->usuario;
        $_SESSION["clave"] = $h->clave;
        $_SESSION["intentos"] = $h->intentos;
        header("location:menu.php");
    }else {
        $error = "Usuario o clave incorrecto";
    }
} 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title></title>
    </head>
    <body>

        <h1> FORMULARIO DE LOGUEO</h1>
        <form action="" method="POST">

            Usuario: <input type="text" value="" name="usuario"></input><br><!-- comment -->
            Clave: <input type="text" value="" name="pass"></input>

            <?php
            if (isset($_POST["aceptar"])) {
                echo "<br>" . $error;
            }
            ?>
            <br><br><!-- comment -->

            <input type="submit" value="Aceptar" name="aceptar"></input>

        </form>

    </body>
</html>
