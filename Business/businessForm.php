<?php

require "C:\Program Files (x86)\Ampps\apache\htdocs\UX-UI\Data\dataForm.php";

class Form {

	private $numForm;
    private $texto;
    private $firstName;
    private $lastName;
    private $email;
    private $phone;

    public function __construct ( $numForm=null, $texto=null,  $firstName=null, $lastName=null,  $email=null, $phone=null) {
        $this->numForm = $numForm;
        $this->texto = $texto;
        $this->firstName = $firstName;        
        $this->lastName = $lastName;
        $this->email = $email;        
        $this->phone = $phone;
    }

    public function getNumForm() {
        return $this->numForm;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function getFirstName() {
        return $this->firstName;
    }
    
    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function getPhone() {
        return $this->phone;
    }

    public function setNumForm($numForm) {
        $this->numForm = $numForm;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function insertFormulario() {
    	$objDataForm = new dataForm();
        $resultado = $objDataForm->insertFormulario($this->texto, $this->firstName, $this->lastName, $this->email, $this->phone);
	    return $resultado;
    }
    
    public function viewFormularios() {
        $objDataForm = new dataForm();
        $resultado = $objDataForm->viewFormularios();
        return $resultado;
    }
}

?>