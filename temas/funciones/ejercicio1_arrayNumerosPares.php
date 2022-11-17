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
        for
            ($i=0;$i<10;$i++) {
            $paresArray[$i]=$i*2;
        }
        
        foreach($paresArray as $paresArray) {
            echo "$paresArray ";
        }
        
        ?>
    </body>
</html>
