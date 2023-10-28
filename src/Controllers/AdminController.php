<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/src/Controllers/UsuarioController.php");



class AdminController extends UsuarioController  {


public function administrarPermiso() {

    $usuario = new Usuario();
    $data = $usuario->AllUsuarios();


    include $_SERVER['DOCUMENT_ROOT']. "/src/views/admin/permisos.php";

}

public function administrarMaestro() {

    
    $usuario = new Admin();
    $data = $usuario->allmaestros();

    $usuario = new Usuario();
    $dataall = $usuario->AllUsuarios();
       

    include $_SERVER['DOCUMENT_ROOT']. "/src/views/admin/maestro.php";


}


public function administrarAlumno() {

    $usuario = new Admin();
    $data = $usuario->allestudiante();


    include $_SERVER['DOCUMENT_ROOT']. "/src/views/admin/alumno.php";

}



public function administrarClases() {


    
    $usuario = new Usuario();
    $data = $usuario->AllUsuarios();


    include $_SERVER['DOCUMENT_ROOT']. "/src/views/admin/clases.php";

}

public function actualizarpermiso($data){

    $update = new Admin();
    $data = $update->updatePermisos($data);
 
    if ($data){
    header("Location: /permisos");}
    
}

public function actualizarmaestro($data){

    $update = new Admin();
    $data = $update->updatemaestro($data);
 
    if ($data){
    header("Location: /maestro");}
    
}

public function createalumno($data){

    $update = new Admin();
    $data = $update->createnewalumno($data);
 
    if ($data){
    header("Location: /alumno");}
    
}

public function deleteAlumno($data){
extract($data);


$delete = new Admin();
$data = $delete->deletestuden($id);

if ($data){
header("Location: /alumno");}
    
}




}
?>