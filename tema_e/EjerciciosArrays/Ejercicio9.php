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
        $estadiosdeFutbol = array(
            "Barcelona" => "Camp Nou",
            "Real Madrid" => "Santiago Bernabeu",
            "Valencia" => "Mestalla",
            "Real Sociedad" => "Anoeta",
            "Real Betis" => "Benito Villamarin"
        );
        
        foreach ($estadiosdeFutbol as $i => $value) {
            echo "<tr>";
            echo "<th>$i</th><td>$value</td>";
            echo "</tr>";
        }
                
          
        ?>
        </table>
    </body>
</html>
