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
            <tr><th>Índices</th><th>Valores</th></tr>
            <?php
            foreach ($_SERVER as $i => $value) {
                echo "<tr><td>${i}</td><td>${value}</td></tr>";
            }
            ?>
        </table>
    </body>
</html>
