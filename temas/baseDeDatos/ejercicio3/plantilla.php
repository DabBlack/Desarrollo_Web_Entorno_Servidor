<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Plantilla para Ejercicios Tema 3</title>
        <link href="dwes.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <div id="encabezado">
            <h1>Ejercicio: Conjuntos de resultados de Mysqli</h1>

            <?php
            $conexion->query("select * from producto");
            if (!$conexion->errno) {
                $error = $conexion->error;
                ?>

                <form id="form_seleccion" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    Producto:
                    <select>
                        <option name="producto">
                            <?php
                            while ($fila = $result->fetch_object()) {
                                echo "option value=''>$fila->nombre_corto</option>";
                            }
                            ?>
                        </option>
                    </select>
                    <input name="boton1" type="submit" value="Mostrar Stock"></input>
                </form>
            <?php
            }
            ?>
        </div>

        <div id="contenido">
            <h2>Contenido</h2>
        </div>

        <div id="pie">
        </div>
    </body>
</html>
