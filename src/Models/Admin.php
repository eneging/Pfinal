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

    $res = $this->connection->query("UPDATE `usuarios` SET `rol_id`= $rol WHERE CorreoElectronico = '$email'");
   
    if ($res){
        return true;
    }else{
        return false;
    }

}

public function updatemaestro($data){

    extract($data);

    $res = $this->connection->query("UPDATE `usuarios` 
    SET `Nombre`='$nombre', `Apellido`='$apellido', `CorreoElectronico`='$email', `clase_id`= 3, `direccion`='$direccion', `fec_nac`='$fecha' 
    WHERE `CorreoElectronico`='$email';
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

    $res = $this->connection->query("INSERT INTO `usuarios`(`Nombre`, `Apellido`,  `CorreoElectronico`,  `contrasena`, `direccion`, `fec_nac` , rol_id , clase_id, DNI ) VALUES ('$nombre','$apellido','$email','$hash','$direccion','$fecha','2' , '3', '$dni')");
   
    if ($res){
        return true;
    }else{
        return false;
    }

}




public function deletestuden($id){

   

  

    $res = $this->connection->query("DELETE FROM `usuarios` WHERE ID = '$id'");
   
    if ($res){
        return true;
    }else{
        return false;
    }

}






public function allmaestros()
{
   $respuesta = $this->connection->query("SELECT * FROM `usuarios`, clases WHERE rol_id = 3 AND usuarios.clase_id = clases.id; ");
   $data_empleados = $respuesta->fetchAll(PDO::FETCH_ASSOC);
   
   return $data_empleados;

}



public function allestudiante()
{
   $respuesta = $this->connection->query("SELECT * FROM `usuarios`, clases WHERE rol_id= 2  AND usuarios.clase_id = clases.id ");
   $data_empleados = $respuesta->fetchAll(PDO::FETCH_ASSOC);
   
   return $data_empleados;

}

}




?>