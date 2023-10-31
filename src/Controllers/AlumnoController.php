<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/src/Controllers/UsuarioController.php");



class AlumnoController extends UsuarioController  {


    public function administrarAlumno() {

        $usuario = new Admin();
        $data = $usuario->allestudiante();
    
    
        include $_SERVER['DOCUMENT_ROOT']. "/src/views/maestro/administraralumno.php";
    
    }


    public function editaralumno() {
    
    
        include $_SERVER['DOCUMENT_ROOT']. "/src/views/alumno/editarAlumno.php";
    
    }

    public function editarPefilalumno($datos) {


        $update = new Admin();
        $data = $update->updatemaestro($datos);
     
        if ($data){
        header("Location: /admAlumnoMaestro");}
        
    }
    

}