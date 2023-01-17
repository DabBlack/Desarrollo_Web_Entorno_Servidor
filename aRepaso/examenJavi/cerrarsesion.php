<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    header("location:index.php");
}
else {
    session_unset();
    session_destroy();
    setcookie("PHPSESSID", "", time()-100000,"/");

    header("location:index.php");
}

