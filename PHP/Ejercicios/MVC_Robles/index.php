<?php
//Configuración global
require_once 'config/global.php';
 
//Base para los controladores
require_once 'core/BaseController.php';
 
//Funciones para el controlador frontal
require_once 'core/FrontController.func.php';
 
//Cargamos controladores y acciones
if(isset($_GET["controller"])){
    $controllerObj=loadController($_GET["controller"]);
    launchAction($controllerObj);
}else{
    $controllerObj=loadController(DEFECT_CONTROLLER);
    launchAction($controllerObj);
}
?>