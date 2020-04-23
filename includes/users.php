<?php
include_once('database.php');
class Users extends DB {
    private $nombreUsuario;
    public function userExist($codigo, $documento, $clave, $rol){
        if ($rol == 'Estudiantes') {
            $query = $this->connect()->prepare('SELECT * FROM Estudiante2020 WHERE Codigo_estudiante = :codigo AND Cod_Matricula = :documento AND Clave = :clave');
            $query->execute(['codigo' => $codigo, 'documento' => $documento, 'clave' => $clave]);

            if($query->rowCount()){
                return True;
            }else {
                return  false;
            } 
        } else if ($rol == 'Profesores'){
            $query = $this->connect()->prepare('SELECT * FROM docente WHERE Codigo = :codigo AND Cedula = :documento AND Clave = :clave');
            $query->execute(['codigo' => $codigo, 'documento' => $documento, 'clave' => $clave]);

            if($query->rowCount()){
                return True;
            }else {
                return  false;
            }
        }
        
    }

    public function setName($codigo, $rol){
        if ($rol == 'Estudiantes'){
            $query = $this->connect()->prepare('SELECT * FROM Estudiante2020 WHERE Cod_Matricula = :codigo');
            $query->execute(['codigo' => $codigo]);
            foreach($query as $currentUser){
                $this->nombreUsuario = $currentUser['Nombre_alumno'];
            }
        }  else if ($rol == 'Profesores'){
            $query = $this->connect()->prepare('SELECT * FROM Docente WHERE Codigo = :codigo');
            $query->execute(['codigo' => $codigo]);
            foreach($query as $currentUser){
                $this->nombreUsuario = $currentUser['Nombre'];
            }
        }
    }

    public function getName(){
        return $this->nombreUsuario;
    }
}
