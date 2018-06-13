<?php

require_once 'conexion.php';

class dataForm {

    const TABLA2 = 'formularios';

    public function insertFormulario($texto, $firstName, $lastName, $email, $phone) {
    	$conexion = new conexion();
        
        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA2 . ' (texto, firstName, lastName, email, phone) VALUES ( :texto, :firstName, :lastName, :email, :phone)');
		
		$consulta->bindParam(':texto', $texto);
        $consulta->bindParam(':firstName', $firstName);
        $consulta->bindParam(':lastName', $lastName);
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':phone', $phone);
 
        $resultado = $consulta->execute();

        $conexion = null;

        return $resultado;
    }

    public function viewFormularios() {

    	$conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA2 .' ORDER BY hora DESC');
        $consulta->execute();
        $registro = $consulta->fetchAll();
        $conexion = null;

        return $registro;
    }
}

?>