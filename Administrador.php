<?php
    //aqui precisamos acrescentar o que vai sair do banco e ir pras tabelas
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>

    </script>

<style>
	html{
		font-family: Arial, Helvetica, sans-serif;
		background-image: url("backgroundMIDAS.png");
		color: #000;
       

	}
	.tab{
		position: center;
        margin-top: 15px;
		background-color: #ff914d;
		border: 1px solid #ccc;
		border-bottom: none;
		border-radius: 5px 5px 0 0;
		overflow: auto;
	}
	.tab button{
		margin: 3px 2px 0 2px;
		background-color: #ff914d;
		border:none;
		outline: none;
		border-radius: 5px 5px 0 0;
		cursor: pointer;
		padding: 10px 16px;
		font-weight: bold;
		color: #333;
		float: left;

	}
	.tab button:hover{
		background-color: #d48351;
		color: #fff;

	}
	.tab button:active{
		background-color: #d46324;
		color: #fff;
	}
	.content{
		border: 1px solid #ccc;
		border-top: none;
		padding: 6px 12px;
		display: none;
		background-color: #d46324;
	}
    .busca{
        display: fixed;
       justify-content: space-between;
		color:white;
        flex-direction: row;
        border: none;
		padding: 15px 17px;
        margin-left: 25%;
		background-color: #d46324;
        font-family: 'Nunito Sans', sans-serif;
    }
    .busca input{
        margin-left: 5%;
		border:none;
		outline: none;
		padding: 6px 12px; 
    }
	.busca select{
		border:none;
		outline: none;
		padding: 6px 12px;
		background-color: #ff914d;
    }
	#submit{
		padding: 8px 20px;
		background-color: white;
		font-family: 'Nunito Sans', sans-serif;
		font-size: 20% auto;
    }
	#submit:hover{
		background-color: #ccc;
	}
</style>
<body>
<div class= "Banco_Inicio">
        <a href="Inicio.php"><img src="BNM_ADM.png">
        </a> 
        <div class="busca">
                <form action="busca.php" method="POST">
                <label for="busca_nome">Conta</label> <input type="text" name="nome" id="busca_nome" placeholder="NOME DO CLIENTE">
                OU
                <label for="idbanco">Banco:</label>
            <select name="banco" id="idbanco">
                <option value="Bradesco">Bradesco</option>
                <option value="Caixa">Caixa</option>
                <option value="Itaú">Itaú</option>
                <option value="Santander">Santander</option>
            </select>
            <input type="submit" value="Buscar">
            </form>
        </div>
<div class="tab">
	<button id= "defalut" class="tab-button" onclick="abrir_tab(event, 'geral')">GERAL</button>
	<button class="tab-button" onclick="abrir_tab(event,'bradesco')">BRADESCO</button>
	<button class="tab-button" onclick="abrir_tab(event,'caixa')">CAIXA</button>
	<button class="tab-button" onclick="abrir_tab(event,'itau')">ITAÚ</button>
	<button class="tab-button" onclick="abrir_tab(event,'santander')">SANTANDER</button>
</div>

<div id="geral" class="content">
	<h2>Lista Geral De contas</h2>
	<p>
		<?php echo "aqui vai a tabela"; //tabela_contas(''); ?>
	</p>
</div>

<div id="bradesco" class="content">
	<h2>Contas do Banco Bradesco</h2>
	<p>
		<?php echo "aqui vai a tabela"; //tabela_contas('bradesco'); ?>
	</p>
</div>

<div id="caixa" class="content">
	<h2>Contas do Banco da Caixa</h2>
	<p>
		<?php echo "aqui vai a tabela"; //tabela_contas('caixa'); ?>
	</p>
</div>

<div id="itau" class="content">
	<h2>Contas do Banco Itaú</h2>
	<p>
		<?php echo "aqui vai a tabela"; //tabela_contas('itau'); ?>
	</p>
</div>

<div id="santander" class="content">
	<h2>Contas do Banco santander</h2>
	<p>
		<?php echo "aqui vai a tabela"; //tabela_contas('santander'); ?>
	</p>
</div>
<script>
	document.getElementById('defalut').click();
	function abrir_tab(event, idtab)
	{
		var itens = document.getElementsByClassName('content');
		for(var i=0; i < itens.length; i++){
			itens[i].style.display= 'none';
		}

		var tabs = document.getElementsByClassName('tab-button');
		for(var i=0; i < tabs.length; i++){
			tabs[i].className= tabs[i].className.replace('active', '');
		}

		document.getElementById(idtab).style.display= 'block';
		event.currentTarget.className += ' active';
		
	}
</script>
</body>
</html>