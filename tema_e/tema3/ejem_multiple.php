<form action="" method="POST">
    Nombre de usuario: <input type="text" name="usu"><br>
    Password: <input type="password" name="pass"> <br>
    Idiomas: <select multiple="" name="idiomas[]">
        <option value="1">Español</option>
        <option value="2">Inglés</option>
        <option value="4">Alemán</option>
        <option value="8">Chino</option>
    </select> <br> <br> 
    Estudios:<br> 
    <input type="checkbox" name="estudios[]" value="ESO">ESO<br>
    <input type="checkbox" name="estudios[]" value="BACHILLERATO">BACHILLERATO<br>
    <input type="checkbox" name="estudios[]" value="CFGM">CFGM<br>
    <input type="checkbox" name="estudios[]" value="CFGS">CFGS<br>
    <input type="checkbox" name="estudios[]" value="UNIVERSIDAD">UNIVERSIDAD<br> <br>
    <input type="submit" name="enviar" value="Enviar">
    <input type="submit" name="recuperar" value="Recuperar"> <br> <br> 
</form>

<?php
if (isset($_POST['enviar'])) {
    $suma = 0;
    foreach ($_POST['idiomas'] as $value) {
        $suma+=$value;
    }
    $str= implode(',', $_POST['estudios']);
    
    $dwes=new mysqli('localhost', 'dwes', 'abc123.', 'dwes');
    if($dwes->connect_errno) {
        die('ERROR AL CONECTAR A LA BD');
    }
     $dwes->query("INSERT INTO usuario (usuario,password,idiomas,estudios) VALUES ('$_POST[usu]','$_POST[pass]',$suma, '$str')");
     if(!$dwes->errno) {
         echo "Filas insertadas: ".$dwes->affected_rows."<br>";
     }
     else {
         echo $dwes->error;
     }
     
}

if (isset($_POST['recuperar'])) {
    $dwes=new mysqli('localhost', 'dwes', 'abc123.', 'dwes');
    if($dwes->connect_errno) {
        die('ERROR AL CONECTAR A LA BD');
    }
    
    $resul=$dwes->query("SELECT * FROM usuario");
    while ($fila=$resul->fetch_object()) {
        echo "Nombre de usuario: ".$fila->usuario."<br>";
        echo "Password: ".$fila->password."<br>";
        echo "Idiomas: ".$fila->idiomas."<br>";
        echo "Estudios: ".$fila->estudios."<br>";
        echo "======================================<br>";
    }
}

?>