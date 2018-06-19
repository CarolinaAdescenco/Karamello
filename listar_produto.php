<?php 
	//inclui o arquivo de conexão
	require_once 'conexaobanco.php';

	//consulta todos os cadastros
	$sql = "SELECT * FROM cadastroprodutos2";

	$resultado = mysqli_query($conexao, $sql);

	//Executa SQL
	//$statement = $conexao->prepare($sql);
	//$statement->execute();

	//$result = $statement->get_result();

	  include_once'head_admin_principal.php';
?>

<title>Produtos</title>

<body id="page-top">

		<table class="tabela_produto_cliente col-sm-5">
			<tr class="cabecalho-tabela">
				<td>Ações</td>
				<td>Tipo</td>
				<td>Sabor</td>
				<td>Quantidade</td>
				<td>Valor Unitário</td>
			</tr>

			<?php while($produtos = $resultado->fetch_assoc()): ?>
				<tr>
					<td class="corpo">
						<a href="<?= "crud/form_atualiza_produto.php?id_produto={$produtos['id']}" ?>"><img class="img_icon" src="img/icon/atualizar.png"></a>
						<a href="<?= "crud/form_excluir_produto.php?id_produto={$produtos['id']}" ?>"><img class="img_icon" src="img/icon/excluir.png"></a>
					</td>
					<td><?= $produtos['tipo']; ?></td>
					<td><?= $produtos['sabor']; ?></td>
					<td><?= $produtos['quantidade']; ?></td>
					<td><?= $produtos['valor'] ?></td>
				</tr>

			<?php endwhile; ?>

			<?php mysqli_close($conexao); ?>
			
		</table>

	<p>Cadastrar <a href="crud/cadastrar_novo_produto.php">novo produto</a></p>
</body>
</html>