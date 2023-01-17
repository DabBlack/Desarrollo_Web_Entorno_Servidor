<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:index.php");
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
                        <div class="col-12 text-center">
                            <img src="imagenes/<?php echo $_GET['img']; ?>" width="500" height="500">
                        </div>
                    </div>
                </form>


            </div>

        </div>
    </body>
</html>
