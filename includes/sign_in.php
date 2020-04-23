<?php include_once('includes/header.php') ?>

<?php
include_once('includes/estudiantes.php');
include_once('includes/estudiantes_sesio.php');

if(isset($_POST['inEstudiante'])){
    $estudiante = new Estudiantes();
    $estudianteSesion = new EstudianteSesion();
    $codigo = $_POST['codigo'];
    $documento = $_POST['documento'];
    $clave = $_POST['clave'];

    if($estudiante->userExist($codigo, $documento, $clave)){
		
		header("Location:https://estudiante.inemjose.net/verificacion?val_ext=Val1_xt&cod=".$codigo."&doc=".$documento."&clav=".$clave."");
        $estudianteSesion->setCurrentUser($codigo);
        $estudiante->setName($codigo);
        $nombre = $estudiante->getName();
        include_once('views/dashboardEstudiantes.php');
		
    } else {
        echo 'Usuario invalido';
    }
} else {
    echo '<h2 style="margin: 20px;">En proceso de desarrolo</h2>';
}

?>

<?php include_once('includes/footer.php') ?>