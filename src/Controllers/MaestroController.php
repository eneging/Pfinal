<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/src/Controllers/UsuarioController.php");



class MaestroController extends UsuarioController  {


    public function editarMaestro() {

      
    
    
        include $_SERVER['DOCUMENT_ROOT']. "/src/views/maestro/editarMaestro.php";
    
    }



}