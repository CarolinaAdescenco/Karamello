<?php 
	//inclui o arquivo de conexao
	require_once '../conexaobanco.php';

	//recupera o id_clientes
	$id_clientes = $_GET["id_cliente"];

	echo $id_clientes;

	//consulta os dados do cliente pelo ID
	$consulta_por_id = "delete from cadastroclientes where id = $id_clientes";

	//executa consulta_por_id
	$resultado = mysqli_query($conexao, $consulta_por_id);

	//fecha a conexão do MYSQL
	mysqli_close($resultado);	

	header("Location: ../listar_cliente.php");