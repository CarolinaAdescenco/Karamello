<?php 
	//inclui o arquivo de conexao
	require_once '../conexaobanco.php';

	//recupera o id_clientes
	$id_produtos = $_GET["id_produto"];

	//consulta os dados do cliente pelo ID
	$consulta_por_id = "select * from cadastroprodutos2 where id = $id_produtos";

	//executa consulta_por_id
	$resultado= mysqli_query($conexao, $consulta_por_id);

	
	//Retorna um array com os dados do cliente
	$produtos = mysqli_fetch_assoc($resultado);

	

	//fecha a conexão do MYSQL
	mysqli_close($conexao);	

	include_once'../head_admin.php';
?>

	<title>Manter Produto</title>
    
    <section class="form-atualizacao">
    	<h1>Atualização dos dados de produtos</h1> 
		<form class="control-group" action="atualizar_produto.php" method="post">

		<div form-group floating-label-form-group controls mb-0 pb-2>

		<input type="hidden" name="id_produto" value="<?= $produtos['id'] ?>">

		<label>Tipo:</label>
		<input type="text" name="txttipo" value="<?= $produtos['tipo'] ?>" >

		<label>Sabor:</label>
		<input type="text" name="txtsabor" value="<?= $produtos['sabor'] ?>">

		<label>Quantidade:</label>
		<input type="text" name="txtquantidade" value="<?= $produtos['quantidade'] ?>">

		<label>Valor:</label>
		<input type="text" name="txtvalorUnitario" value="<?= $produtos['valor'] ?>">

		<input type="submit" value="Atualizar" name="acao">
	</form>
    </section>
	
</body>
</html>