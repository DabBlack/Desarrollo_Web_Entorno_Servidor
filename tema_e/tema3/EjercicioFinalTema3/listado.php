<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="dwes.css" rel="stylesheet" type="text/css">
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
                $result = $conexion->query("select * from familia");
                
                ?>
            <form action="" method="POST">
                Producto: 
                <select name="familia" >
                    <?php
                    while($fila = $result->fetchObject()){
                        $selec="";
                        if($_POST['boton1'] && $_POST['familia']==$fila->cod) $selec="selected";
                            echo "<option value='$fila->cod' $selec>$fila->nombre</option>";
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
           
               echo"<h1>Productos de la familia </h1>";
               $r2 = $conexion->query("select * from producto where familia='$_POST[familia]'");
               while($fila= $r2->fetchObject()){
                   echo '<form method="POST" action="">';
                   echo "$fila->nombre_corto - $fila->PVP €. <input type=submit name=editar value=Editar><br>";
                   echo "</form>";
               }
               echo '<input type="hidden" value='.$_POST['familia'].' name="familia">';
            echo '</form>';
           }
           
           
           
           
           if(isset($_POST['editar'])){
               
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
