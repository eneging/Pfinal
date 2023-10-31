<?php

require_once(__DIR__ . "/src/Controllers/UsuarioController.php");
require_once(__DIR__ . "/src/Controllers/AdminController.php");
require_once(__DIR__ . "/src/Controllers/AlumnoController.php");
require_once(__DIR__ . "/src/Controllers/MaestroController.php");

$urlCompleta = $_SERVER["REQUEST_URI"];
$urlPartida = explode("?", $urlCompleta);
$url = $urlPartida[0];

$controller = new UsuarioController();
$AdminController = new AdminController();
$Alumnocontroller = new AlumnoController();
$MaestroController = new MaestroController();

if ($_SERVER["REQUEST_METHOD"] === "GET") {

      //habilidades del admin ////
    switch ($url) {
        case '/index.php':
            $controller->index();
            break;

        case '/permisos':
            $AdminController->administrarPermiso();
            break;

            case '/maestro':
                $AdminController->administrarMaestro();
                break;

                case '/alumno':
                    $AdminController->administrarAlumno();
                    break;
        
                    case '/clases':
                        $AdminController->administrarClases();
                        break;


                        case '/logout':
                            $controller->logout();
                            break;
                       
            
            //habilidades del alumno ////
            case '/calificaciones':
                $AdminController->administrarAlumno();
                break;
    
                case '/clasesalumnos':
                    $AdminController->administrarClases();
                    break;


                            //habilidades del maestro ////

                            case '/admAlumnoMaestro':
                                $Alumnocontroller->administrarAlumno();
                                break;

                                case '/editmaestro':
                                    $MaestroController->editarMaestro();
                                    break;



    }
}



if ($_SERVER["REQUEST_METHOD"] === "POST") {


    switch ($url) {
        case '/index.php':
            $controller->ingresar($_POST);
            break;

            case '/editarpermiso':
                $AdminController->actualizarpermiso($_POST);
                break;

                case '/editarmaestro':
                    $AdminController->actualizarmaestro($_POST);
                    break;

                    case '/editarmalumno':
                        $AdminController->actualizaralumno($_POST);
                        break;
        


                case '/createalumno':
                    $AdminController->createalumno($_POST);
                    break;

                    case '/createmaestro':
                        $AdminController->createmaestro($_POST);
                        break;
    

                    case '/delete':
                        $AdminController->deleteAlumno($_POST);
                        break;



                        /// maestro envios///


                        case '/editarPefil':
                            $controller->editarPefil($_POST);
                            break;
    }
}
