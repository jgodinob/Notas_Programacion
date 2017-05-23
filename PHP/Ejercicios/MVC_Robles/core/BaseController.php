<?php
class BaseController{
 
    public function __construct() {
        require_once 'BaseEntity.php';
        require_once 'BaseModel.php';
         
        //Incluir todos los modelos
        foreach(glob("model/*.php") as $file){
            require_once $file;
        }
    }
     
    //Plugins y funcionalidades
     
/*
* Este método lo que hace es recibir los datos del controlador en forma de array
* los recorre y crea una variable dinámica con el indice asociativo y le da el 
* valor que contiene dicha posición del array, luego carga los helpers para las
* vistas y carga la vista que le llega como parámetro. En resumen un método para
* renderizar vistas.
*/
    public function view($vista,$datos){
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc}=$valor; 
        }
         
        require_once 'core/HelpersViews.php';
        $helper=new AyudaVistas();
     
        require_once 'view/'.$View.'View.php';
    }
     
    public function redirect($controller=DEFECT_CONTROLLER,$action=DEFECT_ACTION){
        header("Location:index.php?controller=".$controller."&action=".$action);
    }
     
    //Métodos para los controladores
 
}
?>