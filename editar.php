<?php
     header("Access-Control-Allow-Origin: *");
     header("Content-Type: application/json; charset=UTF-8");
     header("Access-Control-Allow-Methods: POST");
     header("Access-Control-Max-Age: 3600");
     header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

     include_once '../config/banco.php';
     include_once '../class/clientes.php';

     $BancoDeDados = new BancoDeDados();
     $bd = $BancoDeDados->Conectar();

     $item = new clientes($bd);

     $Dados = json_decode(file_get_contents("php://input"));

     $item->id = $Dados->id;

     //Valores do Cliente
     $item->nome = $Dados->nome;
     $item->CPF = $Dados->CPF;
     $item->Endereco = $Dados->Endereco;
     $item->Conta = $Dados->Digito;
     $item->Agencia = $Dados->Agencia;
     $item->Data_de_Nascimento = $Dados->Data_de_Nascimento;

     if($item->AtualizarCliente()){
        echo json_encode("Dados do cliente encontrados!!");
     } else{
        echo json_encode("Os dados inseridos não puderam ser atualizados no sistema");
     }
     ?>
     
