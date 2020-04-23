<?php
include('includes/estudiantes.php');
$estudiante = new Estudiantes();
$estudiante->secreto('181039');
$datos = $estudiante->getSecreto();
foreach($datos as $clave => $valor){
    echo $clave . " " . $valor . "  ";
}
?>