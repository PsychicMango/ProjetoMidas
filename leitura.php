<?php
header("Acess-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/banco.php';
include_once '../class/clientes.php';
$BancoDeDados = new BancoDeDados();
$bd = $BancoDeDados->Conectar();
$Itens = new clientes($bd);
$stmt = $itens->getclientes();
$ContagemItens = $stmt->rowcount();

echo json_encode($ContagemItens);
if($ContagemItens > 0){
    
    $ArrayClientes = array();
    $ArrayClientes["body"] = array();
    $ArrayClientes["ContagemItens"] = $ContagemItens;

    while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($linha);
        $listagem = array(
            "id" => $id,
            "nome" => $nome,
            "CPF" => $CPF,
            "Endereco" => $Endereco,
            "Conta" => $Conta,
            "Digito" => $Digito,
            "Agencia" => $Agencia,
            "Data_de_Nascimento" => $Data_de_Nascimento
        );
        array_push($ArrayClientes["body"], $listagem);
    }
    echo json_encode($ArrayClientes);
} else {
    http_response_code(404);
    echo json_encode(array("mensagem" =>"Sem registros encontrados."));
}
?>
