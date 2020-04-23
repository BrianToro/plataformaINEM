<?php include_once('includes/header.php') ?>

<?php
include_once('includes/users.php');
include_once('includes/users_sesion.php');
$usuario = new Users();
$usuarioSesion = new UsersSesion();
if(isset($_POST['inEstudiante'])){
    $codigo = $_POST['codigo'];
    $documento = $_POST['documento'];
    $clave = $_POST['clave'];
    $rol = $_POST['inEstudiante'];

    if($usuario->userExist($codigo, $documento, $clave, $rol)){
        $usuarioSesion->setCurrentUser($codigo);
        $usuario->setName($codigo, $rol);
        $nombre = $usuario->getName();
        header("Location:https://estudiante.inemjose.net/verificacion?val_ext=Val1_xt&cod=".$codigo."&doc=".$documento."&clav=".$clave."");
        include_once('views/dashboardEstudiantes.php');
    } else {
        echo '<h2 style="color: red;">Usuario invalido</h2>';
        include_once('views/sesionEstudiantes.php');
    }

} else if(isset($_POST['inProfesores'])) {
    $codigo = $_POST['codigo'];
    $documento = $_POST['documento'];
    $clave = $_POST['clave'];
    $rol = $_POST['inProfesores'];

    if($usuario->userExist($codigo, $documento, $clave, $rol)){
        $usuarioSesion->setCurrentUser($codigo);
        $usuario->setName($codigo, $rol);
        $nombre = $usuario->getName();
        header("Location:https://docente.inemjose.net/verificacion?val_ext=Val1_xt&cod=".$codigo."&doc=".$documento."&clav=".$clave."");
        include_once('views/dashboardProfesores.php');
    } else {
        echo '<h2 style="color: red;">Usuario invalido</h2>';
        include_once('views/sesionProfes.php');
    } 
}

?>

<?php include_once('includes/footer.php') ?>