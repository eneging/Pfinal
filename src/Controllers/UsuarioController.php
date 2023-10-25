<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/src/Models/Usuario.php");
require_once ($_SERVER['DOCUMENT_ROOT']. '/config/database.php');

class UsuarioController {

public function index(){

    $usuario = new Usuario();
    $data = $usuario->AllUsuarios();
     
    extract($data);
    include $_SERVER['DOCUMENT_ROOT']. "/src/views/login.php";
    

}

public function ingresar($data)
    
    
{
    $seccion = new Usuario();
    $newseccion = $seccion->login($data);
   extract($newseccion);

   if (password_verify($data["contrasena"], $contrasena )) {

    session_start();
  
    if ($newseccion) {

   switch ($rol_id) {
    case 1:
        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/admin/dashboard.php";
    
        break;
    
        case 2:
            include $_SERVER["DOCUMENT_ROOT"] . "/src/views/alumno/dashboard.php";
            break;

            case 3:
                include $_SERVER["DOCUMENT_ROOT"] . "/src/views/maestro/dashboard.php";
                break;

   }

    }

}
    else{
        echo "no coincide";
    }

}  

  
public function dashboard(){

    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/viewsplantillas/dashboard.php";

    
}

}


?>