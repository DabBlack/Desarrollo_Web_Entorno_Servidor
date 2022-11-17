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
        for ($celda = 0; $celda < 5 ; $celda++) {
           for ($columna = 0; $columna < 7; $columna++) {
               echo '<td>'
               .$num++.
               '</td>';
           }
           echo "<tr>";
        }            
        ?>
        </table>
    </body>
</html>
