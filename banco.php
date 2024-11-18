<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'admin';
$bdSenha = 'sistema';
$bdBanco = 'banco';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if(mysqli_connect_error())
{
    echo " não conectou!";
    die();
    
}
