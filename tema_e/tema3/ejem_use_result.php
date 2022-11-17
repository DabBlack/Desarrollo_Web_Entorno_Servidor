<?php
    $dwes=new mysqli("localhost", "dwes", "abc123.", "dwes");
    if ($dwes->connect_errno) {
        die("ERROR");
    }
    $resul=$dwes->query("SELECT * FROM producto");
    if($dwes->errno) {
        echo "ERROR DE LA BD";
    }
    else {
        while($fila=$resul->fetch_object()){
            $result2=$dwes->query("SELECT * FROM familia");
            echo "Producto: ".$fila->nombre_corto."<br>";
            echo "Descripción: ".$fila->descripcion."<br>";
            echo "PVP: ".$fila->PVP."<br>";
            echo "================================<br>";
        }
    }
    $resul->free();
    echo "====FAMILIAS=====<br>";
    while ($fila=$result2->fetch_object()) {
        echo "Código: ".$fila->cod."<br>";
        echo "Nombre: ".$fila->nombre."<br>";
         echo "================================<br>";
    }
    
    echo "************USE RESULT***************";
    
    $resul=$dwes->query("SELECT * FROM producto", MYSQLI_USE_RESULT);
    if($dwes->errno) {
        echo "ERROR DE LA BD";
    }
    else {
        while($fila=$resul->fetch_object()){
            $result2=$dwes->query("SELECT * FROM familia");
            echo "Producto: ".$fila->nombre_corto."<br>";
            echo "Descripción: ".$fila->descripcion."<br>";
            echo "PVP: ".$fila->PVP."<br>";
            echo "================================<br>";
        }
    }
    $resul->free();
    echo "====FAMILIAS=====<br>";
    while ($fila=$result2->fetch_object()) {
        echo "Código: ".$fila->cod."<br>";
        echo "Nombre: ".$fila->nombre."<br>";
         echo "================================<br>";
    }
?>