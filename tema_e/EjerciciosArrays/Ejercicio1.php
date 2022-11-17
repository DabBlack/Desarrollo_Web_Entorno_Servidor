<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        for ($i = 0; $i <= 20; $i++){
            if($i % 2 == 0) {
                $arrayNum[] = $i;
            }
        }
        
        foreach ($arrayNum as $valor) {
             echo $valor."<br>";
        }
        ?>
    </body>
</html>
