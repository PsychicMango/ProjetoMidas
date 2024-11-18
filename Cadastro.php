<?php
    include "auxiliares.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
</head>
<style>
		/* Campos normais são brancos, campos com erro são vermelhos */
		input[type="text"] { background-color: white; color: black; }
		input:invalid      { background-color: #fcc ; color: red; }
</style>
<body>
<div class= "Banco_Inicio">
        <a href="Inicio.php">
            <img src="logo.png" alt="Inicio">
        </a>
    </div>
     <p>CADASTRO</p>
     <fieldset>
       
        <div class="Form_Cadastro"><form action="ContaCriada.php" method="POST" onsubmit="return valida()">
            <label for="idnome">Nome:</label>
            <input type="text" name= "nome" id="idnome" placeholder="Insira seu Nome" maxlength="50" required>

            <label for="idnascimento">Data de Nascimento:</label>
            <input type="date" name= "nascimento" id="idnascimento" required>
           <label for="idcpf">CPF:</label>
            <input type="text" name="cpf"
            id="idcpf"
                pattern="(\d{3}\.\d{3}\.\d{3}-\d{2})|(\d{11})"
                title="Digite o CPF no formato nnn.nnn.nnn-nn"
                placeholder="999.999.999.99"
                oninvalid="return cpf_incorreto(this);">

            <label for="idtelefone">Telefone:</label>
            <input type="tell" name= "telefone" id="idtelefone" placeholder="12-12345-6789" pattern="([0-9]{2}-[0-9]{5}-[0-9]{4})||([0-9]{11})"required>

            <label for="idendereco">Endereço:</label>
            <input type="text" name= "endereco" id="idendereco" placeholder="Insira seu endereco" maxlength="50" required>
            <script>
   

<script>

   function cpf_incorreto(el) {
        alert("O valor " + el.value + " não é um CPF");
        return false;
   }
   
</script>

        <input type="submit" value="Criar conta" />
        </form></div>
    </fieldset>
</body>
</html>