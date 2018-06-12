<?php

require_once 'conexion.php';

class dataLS {

    const TABLA1 = 'comentarios';
    const TABLA2 = 'formularios';
    const TABLA3 = 'mensajes';
    const TABLA4 = 'posts';
    const TABLA5 = 'usuario';

	public function insertUser($username, $name, $email, $password) {
    	$conexion = new conexion();
        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA5 . ' (username, name, email, password) VALUES (:username, :name, :email, :password)');
		
        $consulta->bindParam(':username', $username);
        $consulta->bindParam(':name', $name);
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':password', $password);
 
        $resultado = $consulta->execute();

        $conexion = null;

        return $resultado;
    }

    
    public function viewAllusers() {
        
        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT id , username FROM ' . self::TABLA5);
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetchAll();
        $conexion = null;
        
        return $registro;
    }
    
    public function viewUser($username) {

        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA5 .' WHERE username = :username');

        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion = null;

        return $registro;
    }

    public function modifyUser($id, $username, $name, $email, $password) {
        $conexion = new conexion();
        $consulta = $conexion->prepare('UPDATE ' . self::TABLA5 . ' SET username= :username, name= :name, email= :email, password= :password WHERE id = :id');

        $consulta->bindParam(':username', $username);
        $consulta->bindParam(':name', $name);
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':password', $password);

        $resultado= $consulta->execute();
		$conexion = null;

        return $resultado;
    }

    public function deleteUser($id){
        $conexion = new conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA5 . ' WHERE id = :id');

        $consulta->bindParam(':id', $id);
        $resultado=$consulta->execute();
        $conexion = null;

        return $resultado;
    }

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

    public function insertPost() {
    	$conexion = new conexion();
        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA4 . ' (likes, viewed) VALUES (0, 0)');
 
        $resultado = $consulta->execute();

        $conexion = null;

        return $resultado;
    }

    public function modifyPost($numPost, $likes, $viewed) {
        $conexion = new conexion();

        $consulta = $conexion->prepare('UPDATE ' . self::TABLA5 . ' SET likes= :likes, viewed= :viewed WHERE numPost = :numPost');

        $consulta->bindParam(':numPost', $numPost);
        $consulta->bindParam(':likes', $likes);
        $consulta->bindParam(':viewed', $viewed);

        $resultado= $consulta->execute();
		$conexion = null;

        return $resultado;
    }

    public function increaseLike($numPost) {
        $conexion = new conexion();

        $consulta = $conexion->prepare('UPDATE ' . self::TABLA5 . ' SET likes=likes+1 WHERE numPost = :numPost');

        $consulta->bindParam(':numPost', $numPost);

        $resultado= $consulta->execute();
		$conexion = null;

        return $resultado;
    }




    public function insertFormulario($numForm, $texto, $firstName, $lastName, $email, $phone) {
    	$conexion = new conexion();
        
        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA2 . ' (idUsuario, texto) VALUES ( :idUsuario, :texto)');
		
		$consulta->bindParam(':numMensaje', $numMensaje);
        $consulta->bindParam(':idUsuario', $idUsuario);
        $consulta->bindParam(':texto', $texto);
        $consulta->bindParam(':hora', $hora);
 
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