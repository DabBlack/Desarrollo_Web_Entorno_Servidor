<?php
function generarMatriz() {
      
    $numeros = array();
    for ($i = 0; $i < $_POST["filas"]; $i++) {
        
        for ($a = 0; $a < $_POST["columnas"]; $a++) {
            $numeros[$i][$a] = rand(1,99);
        }
    }
    return $numeros;
   
}

function sumarFilas($numeros) {
    $sumas = array();
    $sum = 0;
    for ($i = 0; $i < $_POST["filas"]; $i++) {
        $sum = 0;
        for ($a = 0; $a < $_POST["columnas"]; $a++) {
            $sum += $numeros[$i][$a];
        }
        $sumas[$i] = $sum;
    }
    
    return $sumas;
}


function sumarColumnas($numeros) {
    $sumas = array();
    $num = 0;   
    for ($i = 0; $i < sizeof($numeros); $i++) {
        for ($a = 0; $a < sizeof($numeros[$i]); $a++) {
            if($i == 0) {
                $sumas[$a] = $numeros[$i][$a];
            }
            else {
                $num = $numeros[$i][$a];
                $sumas[$a] += $num;
            }
        }
    }
    return $sumas;
}

function diagonalPrincipal($numeros) {
    $suma = 0;
    for ($i = 0; $i < sizeof($numeros); $i++) {
        for ($a = 0; $a < sizeof($numeros[$i]); $a++) {
            if ($a == $i) {
                $suma += $numeros[$i][$a];
            }
        }
    }
    return $suma;
}

function matrizInversa($numeros) {
    $inversa = array();
    $cont1 = 0;
    $cont2 = 0;
    for ($i = sizeof($numeros)-1; $i >= 0; $i--) {
        for ($a = sizeof($numeros[$i])-1; $a >= 0; $a--) {
            $inversa[$cont1][$cont2] = $numeros[$i][$a];
            $cont2++;
        }
        $cont1++;
        $cont2 = 0;
    }
    return $inversa;
}

function imprimirMatriz($numeros) {
     for ($i = 0; $i < sizeof($numeros); $i++) {
        echo "<tr>";
        for ($a = 0; $a < sizeof($numeros[$i]); $a++) {
            echo "<td>".$numeros[$i][$a]."</td>";
        }
        echo "</tr>";
    }
}
?>