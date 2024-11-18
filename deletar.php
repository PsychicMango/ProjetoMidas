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

    $Dados = $json_decode(file_get_contents("php://input"));

    $item->id = $Dados->id;

    if($item->DeletarCliente()){
        echo json_encode("Cliente deletado!.");
    }else{
        echo json_encode("Os dados do cliente não foram deletados!.");
    }
?>
