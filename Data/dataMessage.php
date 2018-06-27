<?php

require_once 'conexion.php';

class dataMessage {

    const TABLA3 = 'mensajes';

    public function insertMessage( $idUsuario, $idConversacion,$texto) {
        // echo "da.insert </br>";
    	$conexion = new conexion();
		$consulta = $conexion->prepare('INSERT INTO ' . self::TABLA3 . ' (idUsuario, idConversacion, texto) VALUES ( :idUsuario, :idConversacion, :texto)');
		
        $consulta->bindParam(':idUsuario', $idUsuario);
        $consulta->bindParam(':idConversacion', $idConversacion);        
        $consulta->bindParam(':texto', $texto);
        // echo $consulta->queryString;
        // echo " -- $idUsuario -- $texto";
    
        $resultado = $consulta->execute();

        $conexion = null;

        return $resultado;
    }

    public function viewMessages($idConversacion) {

    	$conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA3 .' WHERE idConversacion = :idConversacion ORDER BY hora');

        $consulta->bindParam(':idConversacion', $idConversacion);
        $consulta->execute();
        $registro = $consulta->fetchAll();
        $conexion = null;

        return $registro;
    }

}

?>