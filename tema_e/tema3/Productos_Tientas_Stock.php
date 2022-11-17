<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #div1 {
                background-color: #cae370;
            }
            
            #div2 {
                background-color: gray;
                height: 300px;
            }
        </style>
    </head>
    <body>
        <?php
        $conexion = new mysqli("localhost","dwes","abc123.","dwes");
        $error=false;
        if($conexion->connect_errno){
        $error=$conexion->connect_error;    
        }
        ?>
        <!-- Encabezado -->
        <div id="div1">
            <h1>Ejercicio :Conjuntos de resultados de Mysqli</h1><!-- comment -->
            <?php
            if(!$error){
                $result = $conexion->query("select * from producto");
                if($conexion->errno){
                    $error=$conexion->errno;
                }else{
                    
                
                ?>
            <form action="" method="POST">
                Producto: 
                <select name="producto" >
                    <?php
                    while($fila = $result->fetch_object()){
                        $selec="";
                        if($_POST['boton1'] && $_POST['producto']==$fila->cod) $selec="selected";
                            echo "<option value='$fila->cod' $selec>$fila->nombre_corto</option>";
                    }
                    ?>
                </select>
                <input name="boton1" type="submit" value="Mostrar Stock"></input>
            </form>
            <?php
                }
            }
            ?>
        </div>
        <!-- 1 -->
        <div id="div2">
            <form action="" method="POST">
           <?php
           if(isset($_POST['boton1'])){
           
               echo"<h1>Stock de la tienda </h1>";
               $r2 = $conexion->query("select t.nombre,t.cod,s.unidades,s.producto from tienda t,stock s where s.producto = '$_POST[producto]' and s.tienda = t.cod ");
               while($fila= $r2->fetch_object()){
                   
                   echo "<input type=hidden value='$_POST[producto]' name='producto'>";
                   echo "<input type=hidden value='$fila->cod' name='tienda[]'>";
                   echo $fila->nombre ." = <input type='text' name=newUnidades[] value='$fila->unidades'> unidades.<br><br>";
                    
               }
           ?>
            <br><br>            
                <input type='submit' name='actualizar' value='Actualizar stock'>
            </form>
            
            <?php
           }
           if(isset($_POST['actualizar'])) {
                $stmt = $conexion->stmt_init();
                $stmt->prepare("UPDATE stock SET unidades=? WHERE tienda=? and producto=?");
                echo $_POST['newUnidades'] . "-" . $_POST['tienda'] . "-" . $_POST['producto'];
                if (!$conexion->errno) {
                    foreach ($_POST['tienda'] as $value) {
                         $stmt->bind_param('iis', $_POST[newUnidades[$value]], $value, $_POST['producto']);
                         $stmt->execute();
                    }
                   
                    if ($stmt->errno) {
                        die('ERROR' . $stmt->error);
                    }
                }
                echo 'REGISTROS INSERTADOS CORRECTAMENTE';
                $stmt->close();
}
?>
           
 
            
            
        </div>
        <!-- 1 -->
        <div id="pie">
           <?php
            if($error){
            echo "Se ha producido un error ".$conexion->connect_error;
           }
           ?>
        </div>
    </body>
</html>
