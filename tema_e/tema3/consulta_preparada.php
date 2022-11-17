<?php
$dwes = new mysqli("localhost", "dwes", "abc123.", "dwes");
$stmt=$dwes->stmt_init();
$stmt->prepare('INSERT INTO tienda (cod, nombre, tlf) VALUES (?,?,?)');
if(!$stmt->errno) {
    $codTienda = 5;
    $nombreTienda = 'SUCURSAL4';
    $tlfTienda = 987654321;
    $stmt->bind_param('isi', $codTienda, $nombreTienda, $tlfTienda);
    $stmt->execute();
    if ($stmt->errno) {
        die('ERROR'.$stmt->error);
    }
    $codTienda = 6;
    $nombreTienda = 'SUCURSAL5';
    $tlfTienda = 167845643;
    $stmt->execute();
    if ($stmt->errno) {
        die('ERROR'.$stmt->error);
    }
    echo 'REGISTROS INSERTADOS CORRECTAMENTE';
    $stmt->close();
    $dwes->close();
    
}


?>