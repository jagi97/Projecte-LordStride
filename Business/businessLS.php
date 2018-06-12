<?php

require_once "../DATA/dataPaises.php";

class Paises {

	private $IDpais;
    private $nombre;
    private $continente;
    private $region;
    private $superficie;
    private $ano_indep;
    private $poblacion;
    private $experanza_vida;
    private $PNB;
    private $codigo;

    public function __construct ($IDpais=null, $nombre=null, $continente=null, $region=null, $superficie=null, $ano_indep=null, $poblacion=null, $experanza_vida=null, $PNB=null, $codigo=null) {
        $this->IDpais = $IDpais;
        $this->nombre = $nombre;
        $this->continente = $continente;
        $this->region = $region;
        $this->superficie = $superficie;
        $this->ano_indep = $ano_indep; 
        $this->poblacion = $poblacion;
        $this->experanza_vida = $experanza_vida;
        $this->PNB = $PNB; 
        $this->codigo = $codigo;         
    }

    public function getId() {
        return $this->IDpais;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getContinente() {
        return $this->continente;
    }

    public function getRegion() {
        return $this->region;
    }

    public function getSuperficie() {
        return $this->superficie;
    }

    public function getAnoIndep() {
        return $this->ano_indep;
    }

    public function getPoblacion() {
        return $this->poblacion;
    }

    public function getEsperanza() {
        return $this->experanza_vida;
    }

    public function getPnb() {
        return $this->PNB;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setId($IDpais) {
        $this->IDpais = $IDpais;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setContinente($continente) {
        $this->continente = $continente;
    }

    public function setRegion($region) {
        $this->region = $region;
    }

    public function setSuperficie($superficie) {
        $this->superficie = $superficie;
    }

    public function setAnoIndep($ano_indep) {
        $this->ano_indep = $ano_indep;
    }

    public function setPoblacion($poblacion) {
        $this->poblacion = $poblacion;
    }

    public function setEsperanza($experanza_vida) {
        $this->experanza_vida = $experanza_vida;
    }

    public function setPnb($PNB) {
        $this->PNB = $PNB;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function Insertar() {
    	$objDataPaises = new dataPaises();
        $resultado = $objDataPaises->Insertar($this->IDpais, $this->nombre, $this->continente, $this->region, $this->superficie, $this->ano_indep, $this->poblacion, $this->experanza_vida, $this->PNB, $this->codigo);
	    return $resultado;
    }

    public function Modificar($IDpais, $nombre, $continente, $region, $superficie, $ano_indep, $poblacion, $experanza_vida, $PNB,  $codigo) {
        $objDataPaises = new dataPaises();
        $resultado = $objDataPaises->Modificar($this->IDpais, $this->nombre, $this->continente, $this->region, $this->superficie, $this->ano_indep, $this->poblacion, $this->experanza_vida, $this->PNB, $this->codigo);
	    return $resultado;
    }

    public function Eliminar($idpaises){
        $objDataPaises = new dataPaises();
        $resultado = $objDataPaises->Eliminar($this->IDpais);
	    return $resultado;
    }

    public function selectPaisesXContinente() {
        $objDataPaises = new dataPaises();
        $resultado = $objDataPaises->selectPaisesXContinente();
        return $resultado;
    }

    public function selectPaisesXNombre() {

    	$objDataPaises = new dataPaises();
        $resultado = $objDataPaises->selectPaisesXNombre();
	    return $resultado;
    }

    public function columnasPaisesXContinente($continente) {
        $objDataPaises = new dataPaises();
        $resultado = $objDataPaises->columnasPaisesXContinente($continente);
	    return $resultado;
    }

    public function mostrarPaisesXContinente($continente) {
        $objDataPaises = new dataPaises();
        $resultado = $objDataPaises->mostrarPaisesXContinente($continente);
	    return $resultado;
    }

    public function mostrarPaisesXNombre($nombre) {
        $objDataPaises = new dataPaises();
        $resultado = $objDataPaises->mostrarPaisesXNombre($nombre);
	    return $resultado;
    }

    public function selectPais($IDpais) {
        $objDataPaises = new dataPaises();
        $resultado = $objDataPaises->selectPais($IDpais);
	    return $resultado;
    }

    public function columnasPais($IDpais) {

        $objDataPaises = new dataPaises();
        $resultado = $objDataPaises->columnasPais($IDpais);
	    return $resultado;
    }

}

?>