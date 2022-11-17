<?php
session_name("David");
session_start();
$_SESSION['dni']="22222222B";
echo $_SESSION['dni'];
?>
<br><a href="cerrar_sesion.php">Cerrar la session</a>