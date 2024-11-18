<?php
    include "auxiliares.php";
    include "Gerador_Conta_Agencia_Bandeira.php";
    if ((isset($_POST['nome'])) && $_POST['nome'] != '') {
        
        $cliente = array();

        $cliente['nome'] = $_POST['nome'];
        $cliente['nascimento'] = $_POST['nascimento'];
        $cliente['cpf'] = $_POST['cpf'];
        $cliente['telefone'] = $_POST['telefone'];
        $cliente['endereco'] = $_POST['endereco'];
        //$cliente['agencia'] = agencia($banco); //nome da função que busca a agencia
        //$cliente['conta'] = conta($cliente['nascimento']); //nome da função que cria a conta
        //$cliente['digito'] = conta($cliente['conta']); //nome da função que cria o digito

        $_SESSION['lista_clientes'][] = $cliente;
        
        //$lista_clientes = buscar_clientes($conexao);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Criada</title>
</head>
<body>
<div class= "Banco_Inicio">
        <a href="Inicio.php">
            <h1>Imagem BNM</h1>
        </a>
    </div>
     <h2>Conta criada com sucesso !</h2>
     <fieldset>
           
            <p>Nome: <?php $_POST['nome'];?></p>
            <p>Número da conta: <?php //echo $Conta."-".$Digito; ?></p>
            <p>Agência: <?php //echo $Agencia; ?></p>
            <p>Banco: <?php //echo $Banco; ?></p>
            
    </fieldset>
<div class="form"><form method="POST">
                <input type="submit" value="Acessar conta" formaction="Conta.php"  />
                <a href="Inicio.php"><p>Voltar ao inicio</p></a>
            </form>
</div>
</body>
</html>