<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/src/Controllers/UsuarioController.php");



class MaestroController extends UsuarioController  {


    public function editarMaestro() {

      
    
    
        include $_SERVER['DOCUMENT_ROOT']. "/src/views/maestro/editarMaestro.php";
    
    }






public function editarPefilmaestro($datos) {


    $update = new Admin();
    $data = $update->updatemaestro($datos);
 
    if ($data){
    header("Location: /src/views/alumno/dashboard.php");}
    
}

}