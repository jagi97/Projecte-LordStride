<?php

require_once "/Applications/MAMP/htdocs/LordStride/Data/dataComment.php";

class Comment {

	private $idComentario;
    private $numPost;
    private $idUsuario;
    private $hora;
    private $texto;

    public function __construct ($idComentario=null, $numPost=null, $idUsuario=null, $hora=null, $texto=null) {
        $this->idComentario = $idComentario;
        $this->numPost = $numPost;
        $this->idUsuario = $idUsuario;
        $this->hora = $hora;
        $this->texto = $texto;        
    }

    public function getIdComentario() {
        return $this->idComentario;
    }

    public function getNumPost() {
        return $this->numPost;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getHora() {
        return $this->hora;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function setIdComentario($idComentario) {
        $this->idComentario = $idComentario;
    }

    public function setNumPost($numPost) {
        $this->numPost = $numPost;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function insertComment($numPost, $idUsuario, $texto) {
    	$objDataComment = new dataComment();
        $resultado = $objDataComment->insertComment($this->numPost, $this->idUsuario, $this->texto);
	    return $resultado;
    }
    
    public function viewComments($numPost) {
        $objDataComment = new dataComment();
        $resultado = $objDataComment->viewComments($numPost);
        return $resultado;
    }

    public function numComments($numPost) {
        $objDataComment = new dataComment();
        $resultado = $objDataComment->numComments($numPost);
        return $resultado;
    }
}

?>