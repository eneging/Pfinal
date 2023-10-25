<?php 


require_once ($_SERVER['DOCUMENT_ROOT']. '/config/database.php');

class Usuario {

    private $connection; 

    public function __construct()
    {
       $db = new Database();
       $this->connection = $db->conectar();
    }


    public function AllUsuarios()
    {
       $respuesta = $this->connection->query("SELECT * FROM usuarios");
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
    

      $respuesta = $this->connection->query("SELECT * FROM usuarios where  CorreoElectronico = '$usuario'");
      $data_usuario = $respuesta->fetch(PDO::FETCH_ASSOC);


  return $data_usuario; }
    
    
   

}