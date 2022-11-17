<?php
session_name("David");
session_start();
echo $_SESSION['dni'];
session_unset();
session_destroy();
setcookie("David","",time()-100,"/");
?>
<br><a href="session1.php">Ir a la  session 1</a>