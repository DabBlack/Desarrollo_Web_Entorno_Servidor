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
        $conexion = @new mysqli("localhost","dwes","abc123","dwe");
        if(!$conexion->connect_errno) {
            $error=$conexion->connect_error;
        }
        ?>
        
        <!-- Encabezado -->
        <div id="encabezado">
            <h1>Ejercicio: Conjuntos de resultados de Mysqli</h1>
            <?php
            $conexion->query("select * from producto");
            if(!$conexion->errno) {
            $error=$conexion->error;
            ?>
            
            <form action="" method="POST">
                Producto:
                <select>
                    <option name="producto">
                        <?php
                        while($fila = $result->fetch_object()){
                            echo "option value=''>$fila->nombre_corto</option>";
                        ?>
                    </option>
                </select>
                <input name="boton1" type="submit" value="Mostrar Stock"></input>
            </form>
        <?php
            }
        }
        ?>
        </div>
        
        <!-- Contenido -->
        <div id="contenido">
               <?php
               if(isset($_POST('boton'))){
                   
               }
               ?>
        </div>

        <!-- Pie -->
        <div id="pie">
            
        </div>
        
        <?php
        if($error){
            echo "Se ha producido un error";
        }
            
        
        ?>
    </body>
</html>
