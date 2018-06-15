<?php

require 'conexion.php';

class dataUser {

    const TABLA5 = 'usuario';

	public function insertUser($username, $name, $email, $password) {
    	$conexion = new conexion();
        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA5 . ' (id, username, name, email, password) VALUES (null, :username, :name, :email, :password)');
		
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

        $consulta->execute();
        $registro = $consulta->fetchAll();
        $conexion = null;
        
        return $registro;
    }
    
    public function viewUser($username) {

        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA5 .' WHERE username = :username');
        
        $consulta->bindParam(':username', $username);

        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion = null;

        return $registro;
    }

    public function signinUser($username, $password) {

        $conexion = new conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA5 .' WHERE username = :username AND password = :password');
        
        $consulta->bindParam(':username', $username);
        $consulta->bindParam(':password', $password);

        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion = null;

        return $registro;
    }

    public function modifyUser($id, $username, $name, $email, $password) {
        $conexion = new conexion();
        $consulta = $conexion->prepare('UPDATE ' . self::TABLA5 . ' SET username= :username, name= :name, email= :email, password= :password WHERE id = :id');

        $consulta->bindParam(':id', $id);
        $consulta->bindParam(':username', $username);
        $consulta->bindParam(':name', $name);
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':password', $password);

        $resultado= $consulta->execute();
		$conexion = null;

        return $resultado;
    }

    public function deleteUser($username){
        $conexion = new conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA5 . ' WHERE username = :username');

        $consulta->bindParam(':username', $username);
        $resultado=$consulta->execute();
        $conexion = null;

        return $resultado;
    }
}

?>