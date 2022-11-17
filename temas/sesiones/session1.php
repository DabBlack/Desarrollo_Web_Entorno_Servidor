<?php
session_name("David");
session_start();

if(!isset($_SESSION['dni'])) {
    $_SESSION['dni']="11111111A";
} 
echo $_SESSION['dni']
?>
<br><a href="session2.php">Ir a la  session 2</a>