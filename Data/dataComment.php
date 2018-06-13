<?php

require_once 'conexion.php';

class dataComment {

    const TABLA1 = 'comentarios';


    public function insertComment($numPost, $idUsuario, $texto) {
    	$conexion = new conexion();
        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA1 . ' (numPost, idUsuario, texto) VALUES (:numPost, :idUsuario, :texto)');
		
        $consulta->bindParam(':numPost', $numPost);
        $consulta->bindParam(':idUsuario', $idUsuario);
        $consulta->bindParam(':texto', $texto);
 
        $resultado = $consulta->execute();

        $conexion = null;

        return $resultado;
    }

    public function viewComments($numPost) {

    	$conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA1 .' WHERE numPost = :numPost ORDER BY hora' );

        $consulta->bindParam(':numPost', $numPost);
        $consulta->execute();
        $registro = $consulta->fetchAll();
        $conexion = null;

        return $registro;
    }

}

?>