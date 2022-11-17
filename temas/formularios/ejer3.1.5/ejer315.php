<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="dwes.css" rel="stylesheet" type="text/css">
        <title></title>
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
        <div id="encabezado">
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
        <div id="contenido">
           <?php
           if(isset($_POST['boton1'])){
           
               echo"<h1>Stock de la tienda </h1>";
               $r2 = $conexion->query("select t.nombre,s.unidades, s.tienda from tienda t,"
                       . "stock s where s.producto = '$_POST[producto]' "
                       . "and s.tienda = t.cod ");
           echo '<form method="post" action="">';
               while($fila= $r2->fetch_object()){
                   echo 'Tienda: '.$fila->nombre .' = <input type="text" name = "unidades[]" value="' .$fila->unidades.'"> unidades<br>';
                   echo '<input type="hidden" name ="tiendas[]" value="'.$fila->tienda.'">';
                   
               }
               echo '<input type="submit" value="actualizar" name="actualizar">';
               echo '<input type="hidden" value='.$_POST['producto'].' name="producto">';
            echo '</form>';
           }
           
           
           
           
           if(isset($_POST['actualizar'])){
               
               $stmt=$conexion->stmt_init();
               $stmt->prepare("update stock set unidades = ? where tienda = ? and producto='$_POST[producto]'");
               if($stmt->errno){
                   echo $stmt->error;
               }
               /*
               $stmt->bind_param('ii',$unidades,$tienda);
               foreach ($_POST['tiendas'] as $key => $value) {
                    $tienda=$value;
                    $unidades=$_POST['unidades'][$key];
                    $stmt->execute();
               }
                * */
               
               for($i=0;$i<count($_POST['tiendas']);$i++){
                   $stmt->bind_param('ii',$_POST['unidades'][$i],$_POST['tiendas'][$i]);
                   $stmt->execute();
               }
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
