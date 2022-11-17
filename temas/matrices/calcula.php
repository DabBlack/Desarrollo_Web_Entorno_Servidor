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
        $matriz = array();
        ?>


        <form action="calcula.php" method="POST">
            Introduzca los siguientes valores de la matriz a generar: <br><br>
            Número de filas: <input type="number" placeholder="0" min="1" name="numFilas"> <br><br>
            Número de columnas: <input type="number" placeholder="0" min="1" name="numColumnas"> <br><br>
            <input type="submit" name="calcular" value="Calcular">
        </form>

        <?php
        if (isset($_POST['Calcular'])) {
            for ($i = 0; $i < numFilas; $i++) {
                for ($j = 0; $j < numColumnas; $j++) {
                    $matriz[i][j] = rand(1, 10);
                    }
            }
            print_r($matriz);
        }
        ?>
    </body>
</html>
