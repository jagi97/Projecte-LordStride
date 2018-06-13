<?php

require_once 'conexion.php';

class dataMessage {

    const TABLA3 = 'mensajes';

    public function insertMessage( $idUsuario, $texto) {
    	$conexion = new conexion();
        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA3 . ' (idUsuario, texto) VALUES ( :idUsuario, :texto)');
		
        $consulta->bindParam(':idUsuario', $idUsuario);
        $consulta->bindParam(':texto', $texto);
 
        $resultado = $consulta->execute();

        $conexion = null;

        return $resultado;
    }

    public function viewMessages($idUsuario) {

    	$conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA3 .' WHERE idUsuario = :idUsuario ORDER BY hora');

        $consulta->bindParam(':idUsuario', $idUsuario);
        $consulta->execute();
        $registro = $consulta->fetchAll();
        $conexion = null;

        return $registro;
    }

}

?>