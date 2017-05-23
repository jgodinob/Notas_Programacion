<?php
class UsersController extends BaseController{
     
    public function __construct() {
        parent::__construct();
    }
     
    public function index(){
         
        //Creamos el objeto usuario
        $user=new User();
         
        //Conseguimos todos los usuarios
        $allusers=$user->getAll();
        
        //Cargamos la vista index y le pasamos valores
        $this->view("index",array(
            "allusers"=>$allusers,
            "Hola"    =>"Soy Víctor Robles"
        ));
    }
     
    public function create(){
        if(isset($_POST["firstname"])){
             
            //Creamos un usuario
            $user=new User();
            $user->setNombre($_POST["firstname"]);
            $user->setApellido($_POST["surname"]);
            $user->setEmail($_POST["email"]);
            $user->setPassword(sha1($_POST["password"]));
            $save=$user->save();
        }
        $this->redirect("User", "index");
    }
     
    public function delete(){
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];
             
            $user=new User();
            $user->deleteById($id); 
        }
        $this->redirect();
    }
     
     
    public function hello(){
        $users=new UsersModel();
        $usu=$users->getUser();
        var_dump($usu);
    }
 
}
?>