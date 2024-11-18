<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body{
            padding: 0;
            margin: 0;
            font-family: Helvetica;
            box-sizing: border-box;
            background-image: url("backgroundMIDAS.png");
		    color: #fff;
        }
        .container{
            display: grid;
            grid-template-columns: 1fr 5fr 1fr;
            grid-template-areas: "h h h " "i p p" "m . ." ". c ."; 
        
        }
        fieldset{
        background: #d46324;
        margin: 30px; 
        border: none;
        grid-area: c;
        border-radius: 2px;
        }
        header{
            background-color: #d46324;
            grid-area: h ;
            text-align: center;
        }
        .perfil{
            background-color: #944417;
            grid-area: p ;
            text-align: justify;
            grid-gap: 0;
        }
        .content{
		display: none;
        grid-area: c ;
        border-radius: 5px; 
        margin: 25px 50px;
        position: center;
        }
        .menu {
            grid-gap: 0;
            background-color: #d46324;
            grid-area: m ;
            display: block;
            text-align: center;
            list-style-type: none;
            padding: 0;
        }
        .imgmenu{
            grid-area: p ;
            padding-top: 8px;
            margin-left: 0;
        }
        .menu button{
		background-color: #d46324;
        border: none;
        
        outline: 0;
        height: 100%;
        weight: 100%;
        
        color: #fff;}
        .menu button:hover{
		background-color: #d48351;
		color: #fff;}

        .menu button:active{
		background-color: #d46324;
		color: #fff;}
        .imgmenu button {
        all: unset;
        cursor: pointer;
        outline: revert;
        }

    </style>
</head>
<body>
    <div class="container">
        <header><a href="Inicio.php">
            <img src="logo.png" alt="Inicio">
        </a><h1>CONTA CORRENTE</h1></header>
<div class="perfil">
    <p>Nome: blabla bla<?php //echo $nome; ?>
    Número da conta: 000000-0<?php //echo $Conta."-".$Digito; ?>
    Agência: 0000-0<?php //echo $Agencia; ?>
    Banco: bla<?php //echo $Banco; ?>
    <p>Saldo: 100,00<?php //echo $Saldo; ?></p>
</div>
<a>
<div class="imgmenu"><button onclick="document.getElementsById('menu').style.display= 'block'"><img src="menuBNM.png" alt="menu" width="65" height="65" /></button></div>
</a>
<div class="menu">
    
<nav><li><button onclick="abrir_tab(event, 'id01').style.display='block'"  class="button">DEPÓSITO</button></li>
          <li><button onclick="abrir_tab(event, 'id02').style.display='block'"   class="button">SAQUE NA CONTA CORRENTE</button></li>
          <li><button onclick="abrir_tab(event, 'id03').style.display='block'" class="button">TRANSFERIR</button></li>
          <li><button onclick="abrir_tab(event, 'id04').style.display='block'" class="button">EXCLUIR CONTA</button></li>
</nav></div>
    </div>

<div id="id01" class="content">
    <fieldset>
        <h2>DEPOSITAR DINHEIRO NA CONTA CORRENTE</h2>
        <label for="valor">Quanto deseja depositar?</label>
		<input type="number" name="valor" id="valor">
        <button class="button" type="submit" formaction="<!--Colocar aqui o link que deposita-->">Feito</button>
    </fieldset>
	
</div>

<div id="id02" class="content">
    <fieldset>
        <h2>SACAR DINHEIRO NA CONTA CORRENTE</h2>
        <label for="valor">Quanto deseja sacar?</label>
		<input type="number" name="valor" id="valor">
        <button class="button" type="submit" formaction="<!--Colocar aqui o link que deposita-->">Feito</button>
    </fieldset>
	
</div>

<div id="id03" class="content">
    <fieldset>
        <h2>TRANSFERIR DINHEIRO DA CONTA CORRENTE</h2>
    <p><label><b>Enviar para</b></label>
          <input class="input" type="text" placeholder="Nome do Cliente" name="nome" required>
          <label><b>Valor</b></label>
          <input class="input" type="number" placeholder="00,0" name="valor" required>
          <button class="button" type="submit" formaction="<!--Colocar aqui o link que transfere o dinheiro-->">Feito</button>  
    </fieldset>
	
</div>

<div id="id04" class="content">
    <fieldset>
        <h2>EXCLUIR</h2>
        <label for="valor">Deseja excluir a conta?</label>
		<input type="hidden" name="excluir" id="excluir">
        <button class="button" type="submit" formaction="<!--Colocar aqui o link que deposita-->">Sim</button>
    </fieldset>
	
</div>

<script>
    document.getElementById('id01').click();
    function abrir_menu(classMenu)
    {
        var itens = document.getElementsByClassName('menu');
		for(var i=0; i < itens.length; i++){
			itens[i].style.display= 'none';
		}
    }
	function abrir_tab(event, idtab)
	{
		var itens = document.getElementsByClassName('content');
		for(var i=0; i < itens.length; i++){
			itens[i].style.display= 'none';
		}

		var tabs = document.getElementsByClassName('button');
		for(var i=0; i < tabs.length; i++){
			tabs[i].className= tabs[i].className.replace('active', '');
		}

		document.getElementById(idtab).style.display= 'block';
		event.currentTarget.className += ' active';
		
	}
</script>
</div></body>
</html>