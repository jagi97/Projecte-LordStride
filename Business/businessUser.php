<?php

//  require "../Data/dataUser.php";
require "/Applications/MAMP/htdocs/LordStride/Data/dataUser.php";

class User {

	private $id;
    private $username;
    private $name;
    private $email;
    private $password;

    public function __construct ($id=null, $username=null, $name=null, $email=null, $password=null) {
        $this->id = $id;
        $this->username = $username;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;        
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function insertUser() {
    	$objDataUser = new dataUser();
        $resultado = $objDataUser->insertUser($this->id, $this->username, $this->name, $this->email, $this->password);
	    return $resultado;
    }
    
    public function viewAllusers() {

        $objDataUser = new dataUser();
        $resultado = $objDataUser->viewAllusers();
        return $resultado;
    }

    public function viewUser($username) {
        $objDataUser = new dataUser();
        $resultado = $objDataUser->viewUser($username);
        return $resultado;
    }
    public function modifyUser($id, $username, $name, $email, $password) {
        $objDataUser = new dataUser();
        $resultado = $objDataUser->modifyUser($this->id, $this->username, $this->name, $this->email, $this->password);
	    return $resultado;
    }

    public function deleteUser($username){
        $objDataUser = new dataUser();
        $resultado = $objDataUser->deleteUser($this->username);
	    return $resultado;
    }
}

?>