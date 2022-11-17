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
        $sumNum = 0;
        for ($i = 0; $i < 10; $i++) {
            $numEnt[] = $i;
        }
        foreach ($numEnt as $i => $valor) {
            if($i % 2 == 0) {
                $sumNum += $valor;
            }
            else {
                echo "El indice impar ".$i." tiene el valor ".$valor.".<br>";
            }
        }
        echo "La media de los números pares es: ".$sumNum/5;
        ?>
    </body>
</html>
