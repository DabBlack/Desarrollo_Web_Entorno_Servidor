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
        try {
        $conexion = new PDO('mysql:host=localhost;dbname=dwes', 'dwes', 'abc123.');
        
        ?>
        <!-- Encabezado -->
        <div id="div1">
            <h1>Ejercicio :Conjuntos de resultados de Mysqli</h1><!-- comment -->
            <?php
                $result = $conexion->query("select * from producto");
                
                ?>
            <form action="" method="POST">
                Producto: 
                <select name="producto" >
                    <?php
                    while($fila = $result->fetchObject()){
                        $selec="";
                        if($_POST['boton1'] && $_POST['producto']==$fila->cod) $selec="selected";
                            echo "<option value='$fila->cod' $selec>$fila->nombre_corto</option>";
                    }
                    ?>
                </select>
                <input name="boton1" type="submit" value="Mostrar Stock"></input>
            </form>
        </div>
        <!-- 1 -->
        <div id="div2">
           <?php
           if(isset($_POST['boton1'])){
           
               echo"<h1>Stock de la tienda </h1>";
               $r2 = $conexion->query("select t.nombre,s.unidades, s.tienda from tienda t,"
                       . "stock s where s.producto = '$_POST[producto]' "
                       . "and s.tienda = t.cod ");
           echo '<form method="post" action="">';
               while($fila= $r2->fetchObject()){
                   echo 'Tienda: '.$fila->nombre .' = <input type="text" name = "unidades[]" value="' .$fila->unidades.'"> unidades<br>';
                   echo '<input type="hidden" name ="tiendas[]" value="'.$fila->tienda.'">';
                   
               }
               echo '<input type="submit" value="actualizar" name="actualizar">';
               echo '<input type="hidden" value='.$_POST['producto'].' name="producto">';
            echo '</form>';
           }
           
           
           
           
           if(isset($_POST['actualizar'])){
               
               $result2 = $conexion->prepare("update stock set unidades = ? where tienda = ? and producto='$_POST[producto]'");
               
               for($i=0;$i<count($_POST['tiendas']);$i++){
                   $unidades = $_POST['unidades'][$i];
                   $tienda = $_POST['tiendas'][$i];
                   $result2->bindParam(1, $unidades);
                   $result2->bindParam(2, $tienda);
                   $result2->execute();
               }
                echo "Registros actualizados correctamente";
           }    
           
           } catch (Exception $ex) {
               echo "ERROR AL EJECUTAR";
           }
           
           
           
           ?>
        </div>
 
    </body>
</html>
