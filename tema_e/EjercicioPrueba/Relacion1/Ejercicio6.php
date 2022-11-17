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
        $numA = 1;
        $numB = 1;
        $numC = 1;
        $limit = 1;
        
        do {
            $numA += $limit;
            $limit++;
            
        } while($limit <= 100);
        
        echo $numA."<br><br>";
        $limit = 1;
        while ($limit <= 100) {
            $numB += $limit;
            $limit++;
        }
        echo $numB."<br><br>";
        
        for ($limit = 1; $limit <= 100; $limit++) {
            $numC += $limit;
        }
        echo $numC."<br><br>";
        ?>
    </body>
</html>
