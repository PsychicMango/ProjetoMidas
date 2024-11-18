<html>
<tr>
<th>Nome</th>
<th>Conta</th>
<th>Digito</th>
<th>Banco</th>
<th>Saldo</th>
<th>Telefone</th>
<th>CPF</th>
<th>Data de Nascimento</th>
<th>Opções</th>    </tr>
</html>
<?php 
function tabela_contas($banco){


    foreach ($lista_contas as $conta): if(conta['banco']==$banco){?>
    <tr>
    <td>
        <?php echo $conta['nome']; ?>
    </td>
    <td>
        <?php echo $conta['conta']; ?>
    </td>
    <td>
    <?php echo traduz_data_para_exibir($conta['digito']); ?>
    </td>
    <td>
    <?php echo traduz_prioridade($conta['banco']); ?>
    </td>
    <td>
    <?php echo traduz_concluida($conta['saldo']); ?>
    </td>
    <td>
    <?php echo traduz_concluida($conta['Telefone']); ?>
    </td>
    <td>
    <?php echo traduz_concluida($conta['CPF']); ?>
    </td>
    <td>
    <?php echo traduz_concluida($conta['nascimento']);?>
    </td>
     <!-- A nova coluna Opções -->

<a href="editar.php?id=<?php echo $conta['id']; ?> ">
Editar
</a>
</td>
</tr>
<?php endforeach; }}
else {
    foreach ($lista_contas as $conta): {?>
        <tr>
        <td>
            <?php echo $conta['nome']; ?>
        </td>
        <td>
            <?php echo $conta['conta']; ?>
        </td>
        <td>
        <?php echo traduz_data_para_exibir($conta['digito']); ?>
        </td>
        <td>
        <?php echo traduz_prioridade($conta['banco']); ?>
        </td>
        <td>
        <?php echo traduz_concluida($conta['saldo']); ?>
        </td>
        <td>
        <?php echo traduz_concluida($conta['Telefone']); ?>
        </td>
        <td>
        <?php echo traduz_concluida($conta['CPF']); ?>
        </td>
        <td>
        <?php echo traduz_concluida($conta['nascimento']);?>
        </td>
         <!-- A nova coluna Opções -->
    
    <a href="editar.php?id=<?php echo $conta['id']; ?> ">
    Editar
    </a>
    </td>
    </tr>
    <?php endforeach; }
} ?>