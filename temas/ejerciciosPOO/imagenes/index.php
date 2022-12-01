<?php
if(isset($_POST['enviar'])){
    echo 'Nombre original: '.$_FILES['foto']['name']."<br>";
    echo 'Nombre temporal: '.$_FILES['foto']['tmp_name']."<br>";
    echo 'Tamaño: '.$_FILES['foto']['size']."<br>";
    echo 'Tipo: '.$_FILES['foto']['type']."<br>";
    echo 'Error: '.$_FILES['foto']['error']."<br><br>";
    
    if(is_uploaded_file($_FILES['foto']['tmp_name'])){
        $fich=time()."-".$_FILES['foto']['name'];
        $ruta="fotos/".$fich;
        move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
        try {
            $conex=new PDO("mysql:host=localhost;dbname=imagenes;charset=utf8mb4","dwes","abc123.",);
            $conex->exec("INSERT INTO imagenes (nombre,ruta) VALUES('$_FILES[foto][name]', '$fich')");
        } catch (Exception $ex) {
            
        }
    }
    else echo 'Error al subir el fichero';
}

?>

<form action="" method="POST" enctype="multipart/form-data">
    Foto: <input type="file" name="foto"><br>
    <input type="submit" name="enviar" value="Enviar">
    
    
</form>