<?php
include "index.php";

if(session_status() == PHP_SESSION_ACTIVE) {
    if(isset($_SESSION["usuario"])) {
        session_destroy();
        echo "<script>alert('Sesión cerrada')</script>";
        echo "<script>location.reload()</script>";
    } else{
        echo "<script>alert('Inicie sesión primero')</script>";
    }
}
//header('Location: index.php');
//header('url:index.php; refresh:1');
?>