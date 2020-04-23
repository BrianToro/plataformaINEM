<?php
include_once('includes/users_sesion.php');
$sesion = new UsersSesion();
$sesion->closeSession();
include_once('index.php');
?>