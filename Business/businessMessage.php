<?php

require_once "/Applications/MAMP/htdocs/LordStride/Data/dataMessage.php";

class Message {

    private $numMensaje;
    private $idUsuario;
    private $texto;
    private $hora;

    public function __construct ( $numMensaje=null, $idUsuario=null,  $texto=null, $hora=null) {
        $this->numMensaje = $numMensaje;
        $this->idUsuario = $idUsuario;
        $this->texto = $texto;        
        $this->hora = $hora;
    }

    public function getNumMensaje() {
        return $this->numMensaje;
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

    public function setNumMensaje($numMensaje) {
        $this->numPost = $numMensaje;
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

    public function insertMessage() {
        // echo "BR.insert </br>";
    	$objDataMessage = new dataMessage();
        $resultado = $objDataMessage->insertMessage($this->idUsuario, $this->texto);
        return $resultado;
    }
    
    public function viewMessages($idUsuario) {
        $objDataMessage = new dataMessage();
        $resultado = $objDataMessage->viewMessages($idUsuario);

        if(!$resultado){
            return false;
        }
        else{
            $arayMessages = array();
            foreach($resultado as $message){
                $objMessage = new Message($message["numMensaje"],$message["idUsuario"],$message["texto"],$message["hora"]);
                $arayMessages[] = $objMessage;
            }
        }
        return $arayMessages;
    }
}

?>