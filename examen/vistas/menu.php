<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="view=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Hospital Comares</title>
    </head>
    <body>
        
    </body>
</html>

<?php
    require_once '../controladores/controladorHospital.php';
    try {
        $hospitales = controladorHospital::obtenerTodosHospitales;
        
        if ($hospitales) {
            foreach ($hospitales as $hos){
                
            }
        }
} catch (PDOException $exc) {
    echo $exc->getMessage();
}







?>

