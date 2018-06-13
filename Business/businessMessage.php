<?php

require_once "../Data/dataMessage.php";

class Message {

    private $numMensaje;
    private $idUsuario;
    private $texto;
    private $hora;

    public function __construct ( $numPost=null, $idUsuario=null,  $texto=null, $hora=null) {
        $this->numPost = $numPost;
        $this->idUsuario = $idUsuario;
        $this->texto = $texto;        
        $this->hora = $hora;
    }

    public function getNumPost() {
        return $this->numPost;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }
    
    public function getTexto() {
        return $this->texto;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setNumPost($numPost) {
        $this->numPost = $numPost;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function insertMessage( $idUsuario, $texto) {
    	$objDataMessage = new dataComment();
        $resultado = $objDataMessage->insertMessage($this->idUsuario, $this->texto);
	    return $resultado;
    }
    
    public function viewMessages($idUsuario) {
        $objDataMessage = new dataComment();
        $resultado = $objDataMessage->viewMessages($idUsuario);
        return $resultado;
    }
}

?>