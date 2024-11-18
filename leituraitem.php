<?php
    header("Acess-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Acess-Control-Allow-Methods: POST");
    header("Acess-Control-Max-Age: 3600");
    header("Acess-Control-Allow-Headers: Content-Type, Acess-Control-Allow-Headers, Authorization, X-Requested-With");
    
    include_once '../config/banco.php';
    include_once '../class/clientes.php';

    $BancoDeDados = new BancoDeDados();
    $bd = $BancoDeDados->Conectar();
    $item = new clientes($bd);
    $item->id = isset($_GET['id']) ? $_GET['id'] : die();

    $item->PegarUmCliente();
        if($item->nome != null){
            //Criação do Array
            $emp_arr = array(
            "id" =>  $item->id,
            "Nome" => $item->nome,
            "CPF" => $item->CPF,
            "Endereco" => $item->Endereco,
            "Conta" => $item->Conta,
            "Digito" => $item->Digito,
            "Agencia" => $item->Agencia,
            "Data_de_Nascimento" => $item->Data_de_Nascimento
            );
            http_response_code(200);
            echo json_encode($emp_arr);
        }else{
            http_response_code(404);
            echo json_encode("Cliente não encontrado!!");
        }
    
?>
