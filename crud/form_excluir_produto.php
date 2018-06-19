<?php 
	//inclui o arquivo de conexao
	require_once '../conexaobanco.php';

	//recupera o id_clientes
	$id_produtos = $_GET["id_produto"];

	echo $id_produtos;

	//consulta os dados do cliente pelo ID
	$consulta_por_id = "delete from cadastroprodutos2 where id = $id_produtos";

	//executa consulta_por_id
	$resultado = mysqli_query($conexao, $consulta_por_id);

	//fecha a conexão do MYSQL
	mysqli_close($resultado);	

	header("Location: ../listar_produto.php");