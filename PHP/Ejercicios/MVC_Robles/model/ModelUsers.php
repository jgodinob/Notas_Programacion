<?php
class ModelUsers extends BaseModel{
    private $table;
     
    public function __construct(){
        $this->table="users";
        parent::__construct($this->table);
    }
     
    //Metodos de consulta
    public function getUser(){
        $query="SELECT * FROM users WHERE email='victor@victor.com'";
        $user=$this->launchSql($query);
        return $user;
    }
}
?>