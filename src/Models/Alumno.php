<?php require_once ($_SERVER['DOCUMENT_ROOT']. '/config/database.php'); 
require_once ($_SERVER['DOCUMENT_ROOT']. '/src/Models/Usuario.php'); 

class Alumno extends Usuario  {

    private $connection; 

    public function __construct()
    {
       $db = new Database();
       $this->connection = $db->conectar();
    }


    public function allestudiante()
    {
       $respuesta = $this->connection->query("SELECT * FROM `usuarios`, clases WHERE rol_id= 2  AND usuarios.clase_id = clases.id ");
       $data_empleados = $respuesta->fetchAll(PDO::FETCH_ASSOC);
       
       return $data_empleados;
    
    }







}