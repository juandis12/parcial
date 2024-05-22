<?php 
    require_once("../config/config.php");
    session_start();
    session_destroy();
    header("location:".Conectar::ruta()."index.php");
    exit();
?>
