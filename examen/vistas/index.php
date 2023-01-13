<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="view=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Hospital Comares</title>
    </head>
    <body>
        <div class="container mt-2">
            <div>
                <h1>Hospital Comares</h1>
                <form method="POST" action="">
                    Usuario: <input type="text" name="usuario" id="usuario">
                    Clave: <input type="password" name="clave" id="clave">
                    <input type="submit" name="aceptar" value="Aceptar" id="aceptar">
                </form>
            </div>
        </div>   
        
         <?php
         require_once '../controladores/Conexion.php';
           if (isset($_POST['aceptar'])) {
                try {
                    $con = conexion();
                    $result = $con->query("SELECT * FROM hospital WHERE usuario='$_POST[usuario]' AND clave='$_POST[clave]'");
                    if ($result->rowCount()>0) {
                        session_start();
                        $fila=$result->fetchObject();
                        $_SESSION['usuario'] = $fila;
                    }

                } catch (PDOException $exc) {
                    echo $exc->getMessage();
                }
            }   
        ?>
    </body>
</html>



