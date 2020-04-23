<?php include_once('includes/header.php') ?>
<?php
include_once('includes/users.php');
include_once('includes/users_sesion.php');

$estudianteSesion = new UsersSesion();
$estudiante = new Users();

if(isset($_SESSION['codigoEstudiante'])){
    include_once('views/dashboardEstudiantes.php');  
} else if(isset($_SESSION['codigoProfesor'])){
    include_once('views/dashboardProfesores.php');
} else {
    include_once('views/index.php');
}
?>
<?php include_once('includes/footer.php') ?>