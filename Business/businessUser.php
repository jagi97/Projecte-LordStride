<?php

//  require "../Data/dataUser.php";
require "C:\Program Files (x86)\Ampps\apache\htdocs\UX-UI\Data\dataUser.php";

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
        $resultado = $objDataUser->insertUser($this->username, $this->name, $this->email, $this->password);
	    return $resultado;
    }
    
    public function viewAllusers() {

        $objDataUser = new dataUser();
        $resultado = $objDataUser->viewAllusers();
        if(!$resultado){
            return false;
        }
        else{
            $arayPersonas = array();
            foreach($resultado as $persona){
                $objPersona = new User($persona["id"],$persona["username"],$persona["name"],$persona["email"],$persona["password"]);
                $arayPersonas[] = $objPersona;
            }
        }
        return $arayPersonas;
    }

    public function viewUser($username) {
        $objDataUser = new dataUser();
        $resultado = $objDataUser->viewUser($username);
        if($resultado){
            return new self($resultado['id'],$resultado['username'],$resultado['name'],$resultado['email'],$resultado['password']);
        }
        else{
            return $false;
        }
    }

    public function signinUser($username, $password) {
        $objDataUser = new dataUser();
        $resultado = $objDataUser->signinUser($username, $password);

        return $resultado;
    }

    public function modifyUser() {
        $objDataUser = new dataUser();
        $resultado = $objDataUser->modifyUser($this->id, $this->username, $this->name, $this->email, $this->password);
	    return $resultado;
    }

    public function deleteUser(){
        $objDataUser = new dataUser();
        $resultado = $objDataUser->deleteUser($this->username);
	    return $resultado;
    }
}

?>