<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscador de Jugadores</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
       
        
        <div id="divPrincipal">
            <table>
                <form action="" method="POST">
                    <h3>Búsqueda de jugadores</h3>
                <tr>
                    <td>Buscar por: </td>
                    <td>
                        <select name="elegido">
                            <option value="dni">Dni</option>
                            <option value="equipo">Equipo</option>
                            <option value="posicion">Posicion</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Busca:</td>
                    <td> <input type="text" name="busqueda"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="buscar" value="Buscar"></td>
                    <td><a href="index.php"><input type="button" name="indice" value="Volver"></a></td>
                </tr>
                </form>
            </table>
            
             <?php
            include './funciones.php';
            if (isset($_POST['buscar'])) {
                $con= conexion();
                
                if($_POST['elegido'] == "dni") {
                    $r1= $con->query("SELECT * FROM jugador where dni='$_POST[busqueda]'");
                }
                else if ($_POST['elegido'] == 'equipo') { 
                    $r1=$con->query("SELECT * FROM jugador where equipo='$_POST[busqueda]'");
                }
                else if($_POST['elegido'] == 'posicion') { 
                    $r1=$con->query("SELECT * FROM jugador where posicion like '%$_POST[busqueda]%' ");
                }
                if($con->affected_rows) {
                    recorrerResultado($r1);
                }
                else {
                    echo "<br>=====================================<br>";
                    echo "<font color=red> No se ha encontrado ningún jugador con esa información.</font>";
                }
                $con->close();
            }
        ?>
        </div>
    </body>
</html>
