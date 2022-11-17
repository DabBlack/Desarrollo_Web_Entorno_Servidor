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
        $numeros = array(3,2,8,123,5,1);
        asort($numeros);
        // var_dump($numeros);
        foreach ($numeros as $key => $value) {
            echo "<td>$value</td>";
        }
        ?>
        </table>
    </body>
</html>
