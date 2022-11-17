<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>calcular matrices</title>
        <style>
            #divPrincipal {
                margin: auto;
                margin-top: 50px;
                width: 20%;
                border: black solid 1px;
                border-radius: 10px;
                box-shadow: 10px 10px 10px grey;
                text-align: left;
                padding: 10px 10px 10px 15px;
            }
            #titulo {
                text-align: center;
            }
            #tabla1 {
                margin: auto;
                align-items: center;                
                border: 1px black solid;
            }
            #tabla1 td {
                border: 1px solid black;
                border-collapse: inherit;
            }
            #divSecun {
                padding-left: auto;
            }
            
            
        </style>
    </head>
    <body>
        <div id="divPrincipal">
            <form method="POST" action="">
            Nº de filas: <input type="text" name="filas"> <br> <br>
            Nº de columnas: <input type="text" name="columnas"> <br> <br>
            <input type="hidden" name="elegido" value="<?php echo $_GET["var"] ?>">
            <input type="submit" name="enviar" value="Calcular"> <br> <br>
        </form>
        </div>
        
        <div id="divJefe">
            <div id="divPrincipal">
                <h3 id="titulo">Matriz Generada</h3>
                <div id="divSecun">
                    <table id="tabla1" >
                        <?php
                            include 'funciones.php';
                            if (isset($_POST["enviar"])) {
                                $numeros = generarMatriz();
                                imprimirMatriz($numeros);
                            }
                        ?>        
                    </table>
                </div>
            
            </div>
        
            <div id="divPrincipal">
                <h3 id="titulo">Resultado</h3>
            <?php
                if (isset($_POST["enviar"])) {
                    if($_GET["var"]==1 || $_GET["var"]==3) {  
                        $sumaFilas = sumarFilas($numeros);
                        for ($i = 0; $i < sizeof($sumaFilas); $i++) {
                            echo "Fila $i : ".$sumaFilas[$i]."<br>";
                        }
                    }
                    if ($_GET["var"] == 2 || $_GET["var"]==3) {
                        $sumaColumnas = sumarColumnas($numeros);
                        for ($i = 0; $i < sizeof($sumaColumnas); $i++) {
                            echo "Columna $i : ".$sumaColumnas[$i]."<br>";
                        }
                    }
           
            if ($_GET["var"] == 4) {
                if ($_POST["filas"] == $_POST["columnas"]) {
                    $sumaDiagonal = diagonalPrincipal($numeros);
                    echo "La suma de la diagonal principal es: ".$sumaDiagonal."<br>";
                }
                        else {
                            echo "<br><font color=red>No es posible sumar la diagonal principal.<br>La matriz debe ser cuadrada</font>";
                        }
                    }
            
                        if( $_GET["var"] == 5) {
                            echo"<br><table border=1 id=tabla1>";
                            $inversa = matrizInversa($numeros);
                            imprimirMatriz($inversa);
                            echo"</table>";
                        }
                    }
                ?>
            
            </div>
        </div>
        
        
        
        
        
        
      
        
    </body>
</html>
