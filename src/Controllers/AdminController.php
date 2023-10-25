<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/src/Controllers/UsuarioController.php");
class AdminController extends UsuarioController  {


public function permisos() {

    $usuario = new Usuario();
    $data = $usuario->AllUsuarios();

    

    include $_SERVER['DOCUMENT_ROOT']. "/src/views/admin/permisos.php";


}



}
?>