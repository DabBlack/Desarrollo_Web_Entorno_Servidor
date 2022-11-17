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
        $a = numRandom();
        echo "Valor de a: " . $a ."<br>";
        $b = numRandom();
        echo "Valor de b: " . $b ."<br>";
        $c = numRandom();
        echo "Valor de c: " . $c ."<br>";
        
        if ($a > $b && $a > $c) echo "El número mayor es: " . $a;
        else if($b > $c) echo "El número mayor es: " . $b;
        else echo "El número mayor es: " . $c;
        
        function numRandom() {
           return $random = rand(0, 100);
        }
        ?>
    </body>
</html>
