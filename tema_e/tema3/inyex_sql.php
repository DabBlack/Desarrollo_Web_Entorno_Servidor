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
        <form action="" method="POST">
            Usuario: <input type="text" name="usu"><br>
            Clave: <input type="password" name="pass"> <br>
            <input type="submit" name="enviar" value="Consulta SQL">
            <input type="submit" name="enviar2" value="Consulta PREPARADA">
        </form>
        <?php
        if (isset($_POST["enviar"])) {
            $dwes= new mysqli("localhost", "dwes", "abc123.", "dwes");
            $result=$dwes->query("SELECT * from usuario where usuario='$_POST[usu]' && password='$_POST[pass]'");
            if(!$dwes->errno) {
                if($result->num_rows>0) {
                    echo 'HAS ENTRADO EN LA APLICACION';
                }
                else {
                    echo 'DATOS INCORRECTOS';
                }
                $dwes->close();
            }
        }
        if(isset($_POST["enviar2"])) {
            $dwes= new mysqli("localhost", "dwes", "abc123.", "dwes");
            $stmt=$dwes->stmt_init();
            $stmt->prepare("SELECT * FROM usuario where usuario=? && password=?");
            $stmt->bind_param('ss', $_POST['usu'], $_POST['pass']);
            $stmt->execute();
            $result=$stmt->get_result();
            if(!$dwes->errno) {
                if($result->num_rows>0) {
                    echo 'HAS ENTRADO EN LA APLICACION';
                }
                else {
                    echo 'DATOS INCORRECTOS';
                }
                $dwes->close();
            }
        }
        ?>
    </body>
</html>
