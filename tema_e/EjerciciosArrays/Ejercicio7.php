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
        $nombres = array("Pedro","Ismael","Sonia","Clara","Susana","Alfonso","Teresa");
        echo "El array posee ".count($nombres)." elementos.<br>";
        echo "<ul>";
        foreach ($nombres as $key => $value) {
            echo "<li>$value</li>";
        }
        echo "</ul>";
        ?>
    </body>
</html>
