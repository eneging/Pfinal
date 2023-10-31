<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/src/Models/Usuario.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/src/Models/Admin.php");
require_once ($_SERVER['DOCUMENT_ROOT']. '/config/database.php');

class UsuarioController {

public function index(){

    $usuario = new Usuario();
    $data = $usuario->AllUsuarios();
     
    $img = $usuario->aletoriaImagenes();

    include $_SERVER['DOCUMENT_ROOT']. "/src/views/login.php";
    

}

public function ingresar($data)
    
    
{
    $seccion = new Usuario();
    $newseccion = $seccion->login($data);
   extract($newseccion);

   if (password_verify($data["contrasena"], $contrasena )) {

    session_start();
    $_SESSION['user'] = $newseccion; 
    
  
    if ($newseccion) {

   switch ($rol) {
    case 'administrador':
        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/admin/dashboard.php";
    
        break;
    
        case 'alumno':
            include $_SERVER["DOCUMENT_ROOT"] . "/src/views/alumno/dashboard.php";
            break;

            case 'maestro':
                include $_SERVER["DOCUMENT_ROOT"] . "/src/views/maestro/dashboard.php";
                break;

   }

    }

}
    else{
        echo "no coincide";
    }

}  

  
public function logout(){

    session_start();
    session_destroy();
    header("Location: /index.php");
    
}


public function editarPefil($data){

    $update = new Usuario();
    $data = $update->updateperfil($data);
 
    if ($data){
    header("Location: /index.php");}
    
}

}


?>