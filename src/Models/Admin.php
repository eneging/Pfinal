<?php require_once ($_SERVER['DOCUMENT_ROOT']. '/config/database.php'); 
require_once ($_SERVER['DOCUMENT_ROOT']. '/src/Models/Usuario.php'); 

class Admin extends Usuario  {

    private $connection; 

    public function __construct()
    {
       $db = new Database();
       $this->connection = $db->conectar();
    }


public function updatePermisos($data){

    extract($data);

    $res = $this->connection->query("UPDATE `usuarios` SET `rol`= '$rol' WHERE correo = '$email'");
   
    if ($res){
        return true;
    }else{
        return false;
    }

}

public function updatemaestro($data){

    extract($data);

    $res = $this->connection->query("UPDATE `usuarios` 
    SET `nombre`='$nombre', `Apellido`='$apellido', `correo`='$email', `direccion`='$direccion', `fec_nac`='$fecha' 
    WHERE `correo`='$email';
    ");
   
    
    if ($res){
       
        $materia = $this->connection->query("UPDATE `asignacion_maestros` SET `materia_id`='$clase' WHERE `maestro_id`='$maestro_id'");
    if ($materia) {
        return true;
    } else {
        return false;
    }

    }
    else{
        return false;
    }

}


public function updatealumno($data){

    extract($data);

    $res = $this->connection->query("UPDATE `usuarios` 
    SET `nombre`='$nombre', `Apellido`='$apellido', `correo`='$email', `direccion`='$direccion', `fec_nac`='$fecha' 
    WHERE `correo`='$email';
    ");
   
    
    if ($res){
        return true;
    }else{
        return false;
    }

}


public function createnewalumno($data){

    extract($data);

    $hash = password_hash($contrasena, PASSWORD_DEFAULT);

    $res = $this->connection->query("INSERT INTO `usuarios`(`nombre`, `Apellido`, `correo`, `contrasena`, `direccion`, `fec_nac`, `rol`, `dni`) VALUES ('$nombre', '$apellido', '$email', '$hash', '$direccion', '$fecha', 'alumno', '$dni');
    ");
   
    if ($res){
        return true;
    }else{
        return false;
    }

}


public function createnewmaestro($data){

    extract($data);

    $hash = password_hash($contrasena, PASSWORD_DEFAULT);

    $res = $this->connection->query("INSERT INTO `usuarios`(`nombre`, `Apellido`,  `correo`,  `contrasena`, `direccion`, `fec_nac`, 'rol_id') VALUES ('$nombre','$apellido','$email','$hash','$direccion','$fecha','maestro')");
   
    if ($res){
        return true;
    }else{
        return false;
    }

}



public function deletestuden($id){

   

  

    $res = $this->connection->query("DELETE FROM `usuarios` WHERE usuario_id = '$id'");
   
    if ($res){
        return true;
    }else{
        return false;
    }

}




public function allmaestros()
{
   $respuesta = $this->connection->query("SELECT usuarios.usuario_id as id , usuarios.nombre , usuarios.correo, usuarios.direccion, usuarios.fec_nac, materias.nombre as clase_asignada, usuarios.Apellido , maestros.maestro_id FROM `asignacion_maestros` , maestros , materias, usuarios WHERE asignacion_maestros.maestro_id = maestros.maestro_id AND maestros.usuario_id = usuarios.usuario_id AND asignacion_maestros.materia_id = materias.materia_id;");
   $data_empleados = $respuesta->fetchAll(PDO::FETCH_ASSOC);
   
   return $data_empleados;

}


public function allmaestrosBy($id)
{
   $respuesta = $this->connection->query("SELECT usuarios.usuario_id as id , usuarios.nombre , usuarios.correo, usuarios.direccion, usuarios.fec_nac, materias.nombre as clase_asignada, usuarios.Apellido , maestros.maestro_id FROM `asignacion_maestros` , maestros , materias, usuarios WHERE  usuarios.usuario_id = '$id'  AND asignacion_maestros.maestro_id = maestros.maestro_id AND maestros.usuario_id = usuarios.usuario_id AND asignacion_maestros.materia_id = materias.materia_id; ");
   $data_empleados = $respuesta->fetchAll(PDO::FETCH_ASSOC);
   
   return $data_empleados;

}

public function allmaterias()
{
   $respuesta = $this->connection->query("SELECT * FROM `materias`");
   $data_empleados = $respuesta->fetchAll(PDO::FETCH_ASSOC);
   
   return $data_empleados;

}

public function allestudiante()
{
   $respuesta = $this->connection->query("SELECT * FROM `usuarios` WHERE rol= 'alumno'");
   $data_empleados = $respuesta->fetchAll(PDO::FETCH_ASSOC);
   
   return $data_empleados;

}


public function allmaestro2()
{
   $respuesta = $this->connection->query("SELECT usuarios.usuario_id as id , usuarios.nombre , usuarios.correo, usuarios.direccion, usuarios.fec_nac, materias.nombre as clase_asignada FROM `asignacion_maestros` , maestros , materias, usuarios WHERE asignacion_maestros.maestro_id = maestros.maestro_id AND maestros.usuario_id = usuarios.usuario_id AND asignacion_maestros.materia_id = materias.materia_id;");
   $data_empleados = $respuesta->fetchAll(PDO::FETCH_ASSOC);
   
   return $data_empleados;

}


}




?>