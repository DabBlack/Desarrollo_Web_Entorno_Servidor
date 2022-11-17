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
        global $random;
        $random = numRandom();
        
        $celda = 0;
        $columna = 0;
        for ($celda = 0; $celda < 10 ; $celda++) {
           for ($columna = 0; $columna < 10; $columna++) {
               echo '<td>'
               .$random.
               '</td>';
               $random+=2;
           }
           echo "<tr>";
        }    
        
        function numRandom() {
           $random = 2;
           while($random % 2 == 0) {
            $random = rand(0, 100);
           } 
           return $random;
        }
        
        ?>
        </table>
    </body>
</html>
