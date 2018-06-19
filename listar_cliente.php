<?php 
	//inclui o arquivo de conexão
	require_once 'conexaobanco.php';

	//consulta todos os cadastros
	$sql = "SELECT * FROM cadastroclientes";

	$resultado = mysqli_query($conexao, $sql);

	//Executa SQL
	//$statement = $conexao->prepare($sql);
	//$statement->execute();

	//$result = $statement->get_result();

	include_once'head_admin_principal.php';
?>

	<title>Clientes</title>
<body id="page-top">

		<table class="tabela_produto_cliente col-sm-10" >
			<tr class="cabecalho-tabela">
				<td>Ações</td>
				<td>Nome</td>
				<td>E-mail</td>
				<td>Telefone</td>
				<td>Cidade</td>
				<td>Bairro</td>
			</tr>

			<?php while($clientes = $resultado->fetch_assoc()): ?>
				<tr>
					<td>
						<a href="<?= "crud/form_atualiza_cliente.php?id_cliente={$clientes['id']}" ?>"><img class="img_icon" src="img/icon/atualizar.png"></a>
						<a href="<?= "crud/form_excluir_cliente.php?id_cliente={$clientes['id']}" ?>"><img class="img_icon" src="img/icon/excluir.png"></a>
					</td>
					<td><?= $clientes['nome']; ?></td>
					<td><?= $clientes['email']; ?></td>
					<td><?= $clientes['telefone']; ?></td>
					<td><?= $clientes['cidade']; ?></td>
					<td><?= $clientes['bairro']; ?></td>
				</tr>

			<?php endwhile; ?>

			<?php mysqli_close($conexao); ?>
			
		</table>

	<p>Cadastrar <a href="crud/cadastrar_novo_cliente.php">Novo cliente</a></p>
</body>
</html>