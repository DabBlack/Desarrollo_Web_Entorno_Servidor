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
        <table border="solid 1px black">
        <?php
        global $num;
        $num = 1;
        $celda =0;
        $columna=0;
        do {
            $columna=0;
            do {
                echo '<td>'
               .$num++.
               '</td>';
                $columna++;
            } while ($columna < 7);
            $celda++;
            echo "<tr>";
        } while ($celda < 5);
        ?>
        </table>
    </body>
</html>
