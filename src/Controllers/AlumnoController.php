<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/src/Controllers/UsuarioController.php");



class AlumnoController extends UsuarioController  {


    public function administrarAlumno() {

        $usuario = new Admin();
        $data = $usuario->allestudiante();
    
    
        include $_SERVER['DOCUMENT_ROOT']. "/src/views/maestro/administraralumno.php";
    
    }



}