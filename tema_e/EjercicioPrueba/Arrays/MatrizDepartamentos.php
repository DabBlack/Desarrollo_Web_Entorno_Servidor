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
        <table border="1">
        <?php
        
        $datos = array(
            "Marketing"=> array("Nombre" => "Juan", "Apellidos" => "Pérez", "Salario" => 1600, "Edad" => 43),
            "Contabilidad"=> array("Nombre" => "Rosa", "Apellidos" => "López", "Salario" => 1550, "Edad" => 36),
            "Ventas"=> array("Nombre" => "Mario", "Apellidos" => "Cabezas", "Salario" => 1725, "Edad" => 54),
            "Informática"=> array("Nombre" => "Carlos", "Apellidos" => "Carlos", "Salario" => 1900, "Edad" => 28),
            "Dirección" => array("Nombre" => "Alberto", "Apellidos" => "Sánchez", "Salario" => 2500, "Edad" => 55)
        );
        echo "<td></td>";
        
        foreach ($datos["Marketing"] as $i => $Dep) {
            echo "<th>$i</th>";
        }
        
        foreach ($datos as $i => $nomDep) {
            echo "<tr>";
            echo "<th>$i</th>";
            foreach ($nomDep as $i2 => $propiedad) {
                echo "<td>$propiedad</td>";
            }
            echo "</tr>";
        }
        
        ?>
        </table>
    </body>
</html>
