<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        setlocale(LC_TIME,"spanish");
        $fechaactual = date("l , j \of F \of o");
        echo strftime($fechaactual);
        
        setlocale(LC_TIME,"spanish");
        echo strftime("<br> %A , %d de %B del %Y");
        
        $dia = date("N");
        $mes = date("n");
        
        switch ($dia){
            case 1: $dia = 'Lunes';
                break;
            case 2: $dia = 'Martes';
                break;
            case 3: $dia = 'Miercoles';
                break;
            case 4: $dia = 'Jueves';
                break;
            case 5: $dia = 'Viernes';
                break;
            case 6: $dia = 'Sábado';
                break;
            case 7: $dia = 'Domingo';
                break;
        }
        
        switch ($mes) {
            case 1: $mes = 'Enero';
                break;
            case 2: $mes = 'Febrero';
                break;
            case 3: $mes = 'Marzo';
                break;
            case 4: $mes = 'Abril';
                break;
            case 5: $mes = 'Mayo';
                break;
            case 6: $mes = 'Junio';
                break;
            case 7: $mes = 'Julio';
                break;
            case 8: $mes = 'Agosto';
                break;
            case 9: $mes = 'Septiembre';
                break;
            case 10: $mes = 'Octubre';
                break;
            case 11: $mes = 'Noviembre';
                break;
            case 12: $mes = 'Diciembre';
                break;
        }
        
        print "<br>".$dia.", ". date("d")." de ".$mes." del ". date("Y");
        ?>
    </body>
</html>
