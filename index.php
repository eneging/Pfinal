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


           switch ($url) {
            case '/permisos':
               $Controller->index();
               break;
        }
    }
}



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
       
    switch ($url) {
        case '/index.php':
           $controller->ingresar($_POST);
           break;
    }
}



?>