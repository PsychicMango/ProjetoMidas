<?php
function banco($banco)
{
    switch($banco)
    {
        case 1:
            return "Bradesco";
        break;
        case 2:
            return "Caixa Economica";
        break;
        case 3:
            return "Itau";
        break;
        case 4:
            return "N";
        break;
    }
}
//Dados pegos do banco
function buscar_cliente($conexao)
{
$sqlBusca = 'SELECT * FROM clientes';
$resultado = mysqli_query($conexao, $sqlBusca);
$clientes = array();
while ($cliente = mysqli_fetch_assoc($resultado)) {
    $clientes[] = $cliente;
    }
    return $clientes;
}
//grava os dados no banco
function gravar_cliente($conexao, $cliente)
{
$sqlGravar = "
INSERT INTO clientes
(banco, nome, nascimento, cpf, conta, digito, agencia, saldo )
VALUES
(
'{$cliente['banco']}',
'{$cliente['nome']}',
'{$cliente['nascimento']}',
'{$cliente['cpf']}',
{$cliente['conta']},
{$cliente['digito']},
'{$cliente['agencia']}',
'{$cliente['saldo']}'
)
";
mysqli_query($conexao, $sqlGravar);
}
//exclui dados no banco
function remover_cadastro($conexao, $cpf){

    $remover = "DELETE FROM clientes WHERE cpf = {$cpf}";

    mysqli_query($conexao, $remover);

}