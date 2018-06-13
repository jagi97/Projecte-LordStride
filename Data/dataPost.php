<?php

require_once 'conexion.php';

class dataPost {

    const TABLA4 = 'posts';

    public function insertPost() {
    	$conexion = new conexion();
        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA4 . ' (likes, viewed) VALUES (0, 0)');
 
        $resultado = $consulta->execute();

        $conexion = null;

        return $resultado;
    }

    public function increaseLike($numPost) {
        $conexion = new conexion();

        $consulta = $conexion->prepare('UPDATE ' . self::TABLA4 . ' SET likes=likes+1 WHERE numPost = :numPost');

        $consulta->bindParam(':numPost', $numPost);

        $resultado= $consulta->execute();
		$conexion = null;

        return $resultado;
    }
}

?>