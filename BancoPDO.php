<?php

class BancoDeDados{
private $bdServidor = '127.0.0.1';
private $bdBanco = 'banco';
private $bdUsuario = 'admin';
private$bdSenha = 'sistema';
public $conn;

public function Conectar(){
    $this->conn = null;
    try{
        $this->conn = new PDO("mysql:host=" . $this->bdServidor . ";bdnome=" . $this->bdBanco, $this->bdUsuario,$this->bdSenha);
        $this->conn->exec("set names utf8");
    } catch(PDOException $exception){
        echo "O banco de dados não conseguiu se conectar: " . $exception->getMessage();
    }
    return $this->conn;
}
}
?>
