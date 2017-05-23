<?php
class User extends BaseEntity{
    private $id;
    private $firstname;
    private $surname;
    private $email;
    private $password;
     
    public function __construct() {
        $table="users";
        parent::__construct($table);
    }
     
    public function getId() {
        return $this->id;
    }
 
    public function setId($id) {
        $this->id = $id;
    }
     
    public function getFirstname() {
        return $this->firstname;
    }
 
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }
 
    public function getSurname() {
        return $this->surname;
    }
 
    public function setSurname($surname) {
        $this->surname = $surname;
    }
 
    public function getEmail() {
        return $this->email;
    }
 
    public function setEmail($email) {
        $this->email = $email;
    }
 
    public function getPassword() {
        return $this->password;
    }
 
    public function setPassword($password) {
        $this->password = $password;
    }
 
    public function save(){
        $query="INSERT INTO users (id,firstname,surname,email,password)
                VALUES(NULL,
                       '".$this->firstname."',
                       '".$this->surname."',
                       '".$this->email."',
                       '".$this->password."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
 
}
?>