<?php
session_start();
include "banco.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formatacao.css">
    <title>BN Midas</title>
    <style>
       /*html, body{
            padding: 0;
            margin: 0;
            font-family: Helvetica;
            box-sizing: border-box;
            background-image: url("backgroundMIDAS.png");
		    color: #fff;
        }
        .container{
            display: grid;
            grid-template-columns: 2fr 1fr 2fr;
            grid-template-areas: "h c c" "f . a" ; 
        
        }
        header{
            background-color: #d46324;
            grid-area: h ;
        }
        .Barra_Superior
        {
            background-color: #d46324;
            grid-area: c ;
        }*/

    </style>
</head>
<body><header>
    <a href="Inicio.php">
            <img src="logo.png" alt="Inicio">
        </a>
</header>
    </div>
<div class= "Barra_Superior">
<fieldset>



        <form action="Conta.php" method="POST">
            <label for="idagencia">Agência:</label>
            <input type="number" name= "agencia" id="idagencia" placeholder="0000-0" pattern="[0-9]{4}-([0-9]{1} "required>

            <label for="idconta">Conta:</label>
            <input type="number" name= "conta" id="idconta" placeholder="000000" pattern="[0-9]{6}"required>

            <label for="iddigito">Digito:</label>
            <input type="number" name= "digito" id="iddigito" placeholder="0" pattern="[0-9]{1}"required>
            
            <input type="submit" value= "Acessar conta " name="Acessar conta">
        </form>
    </fieldset>
</div>
    <fieldset>
        <legend>Escolha o banco e crie sua conta</legend>
        <form action="Cadastro.php" method="POST">
        <label for="idbanco">Banco:</label>
            <select name="banco" id="idbanco" required>
                <option value="Bradesco">Bradesco</option>
                <option value="Caixa">Caixa</option>
                <option value="Itaú">Itaú</option>
                <option value="Santander">Santander</option>
            </select>
            <input type="submit" value= "Criar uma conta " name="Criar uma conta" formaction="Cadastro.php">
        </form> 
    </fieldset>
    <p>OU</p>
    <a href="Administrador.php">
        <img src="BNM_ADM.png" alt="Administrador">
    </a>
   
</form>
       
        </body>
</html>