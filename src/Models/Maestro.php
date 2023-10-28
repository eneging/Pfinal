<?php require_once ($_SERVER['DOCUMENT_ROOT']. '/config/database.php'); 
require_once ($_SERVER['DOCUMENT_ROOT']. '/src/Models/Usuario.php'); 

class Maestro extends Usuario  {

    private $connection; 

    public function __construct()
    {
       $db = new Database();
       $this->connection = $db->conectar();
    }

    









}