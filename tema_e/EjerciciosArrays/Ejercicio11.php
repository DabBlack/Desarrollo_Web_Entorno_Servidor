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
         
         for ($index = 0; $index < 4; $index++) {
             $primerArray[] = array($numRand=rand(1,100));
             $segunArray[] = array($numRand=rand(1,100));
         }
         
         echo "ARRAY 1<br>";
         foreach ($primerArray as $key) {
             print_r($key);
         }
          echo "<br><br>ARRAY 2<br>";
         foreach ($segunArray as $key) {
             print_r($key);
         }
        
        echo "<br><br>Array Unido Merge:<br>";
        $fusionArrays = array_merge($primerArray,$segunArray);
        print_r($fusionArrays);
        
        echo "<br><br>Array Unido Manual:<br>";
        $arrayManual = array();
        for ($a = 0; $a < count($primerArray); $a++) {
            $arrayManual[] = $primerArray[$a];
            $arrayManual[] = $segunArray[$a];
        }
        print_r($arrayManual);
        
        echo "<br><br>Ordenado con Sort:<br>";
       sort($fusionArrays);
       print_r($fusionArrays);
       
       echo "<br><br>Ordenamiento Manual:<br>";
       $boolean = true;
       $a = 0;
       $aux = 0;
       while ($boolean ) {
           $boolean = false;
           $a++;
           for ($j = 0; $j<count($arrayManual) - $a;$j++) {
               if ($arrayManual[$j] > $arrayManual[$j + 1]) {
                   $aux = $arrayManual[$j];
                   $arrayManual[$j] = $arrayManual[$j+1];
                   $arrayManual[$j+1] = $aux;
                   $boolean = true;
               }
           }
       }
       print_r($arrayManual);
        ?>
    </body>
</html>
