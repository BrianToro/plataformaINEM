<?php include_once('includes/header.php') ?>
<?php
include_once('includes/users_sesion.php');
$sesion = new UsersSesion();
$sesion->closeSession();
if(isset($_POST['inEstudiantes'])){
    include_once('views/sesionEstudiantes.php');
} else if(isset($_POST['inProfesores'])){
    include_once('views/sesionProfes.php');
} else if(isset($_POST['inAdministrativos'])){
    include_once('views/sesionAdmin.php');
}


?>

<?php include_once('includes/footer.php') ?>