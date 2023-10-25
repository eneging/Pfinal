<?php 

require_once(__DIR__."/src/Controllers/UsuarioController.php");
require_once(__DIR__."/src/Controllers/AdminController.php");


$urlCompleta = $_SERVER["REQUEST_URI"];
$urlPartida = explode("?", $urlCompleta);
$url = $urlPartida[0];

$controller = new UsuarioController();
$AdminController = new AdminController();

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    
       
    switch ($url) {
        case '/index.php':
           $controller->index();
           break;

//habilidades del admin ////
           switch ($url) {
            case '/permisos':
                $AdminController->AdministrarPermiso($_GET['id']);
               break;}

               switch ($url) {
                case '/maestros':
                    $AdminController->AdministrarMaestros();
                   break;}

                   switch ($url) {
                    case '/alumnos':
                        $AdminController->AdministrarAlumnos();
                       break;}

                       switch ($url) {
                        case '/clases':
                            $AdminController->AdministrarClases();
                           break;}


                        

        }
    }




if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
       
    switch ($url) {
        case '/index.php':
           $controller->ingresar($_POST);
           break;
    }

    switch ($url) {
        case '/src/views/admin/permisos.php':
           $AdminController->permisos($_POST);
           break;
    }

}



?>