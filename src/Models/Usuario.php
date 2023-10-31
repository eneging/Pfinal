<?php 


require_once ($_SERVER['DOCUMENT_ROOT']. '/config/database.php');

class Usuario {

    private $connection; 

    public function __construct()
    {
       $db = new Database();
       $this->connection = $db->conectar();
    }

    public function aletoriaImagenes() 
 {
    $res = $this->connection->query("SELECT * FROM img
    ORDER BY RAND()
    LIMIT 1");
    $data = $res->fetch(PDO::FETCH_ASSOC);
    
    return $data;
}


    public function AllUsuarios()
    {
       $respuesta = $this->connection->query("SELECT * FROM `usuarios`");
       $data_empleados = $respuesta->fetchAll(PDO::FETCH_ASSOC);
       
       return $data_empleados;
  
    }

    public function UsuarioByid($id)
{  

       $respuesta = $this->connection->query("SELECT * FROM usuarios WHERE rol_id = $id");
       $data_usuario = $respuesta->fetch(PDO::FETCH_ASSOC);
       
       return $data_usuario;
  
    }






    public function login($data){

     


      $usuario = $data["correo"];
      

      $respuesta = $this->connection->query("SELECT * FROM usuarios where  correo = '$usuario'");
      $data_usuario = $respuesta->fetch(PDO::FETCH_ASSOC);


  return $data_usuario; }
    
    
   
  public function updateperfil($data){

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


  

  
}