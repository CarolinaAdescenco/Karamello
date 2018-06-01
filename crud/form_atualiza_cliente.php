<?php 
	//inclui o arquivo de conexao
	require_once '../conexaobanco.php';

	//recupera o id_clientes
	$id_clientes = $_GET["id_cliente"];

	//consulta os dados do cliente pelo ID
	$consulta_por_id = "select * from cadastroclientes where id = $id_clientes";

	//executa consulta_por_id
	$resultado= mysqli_query($conexao, $consulta_por_id);

	
	//Retorna um array com os dados do cliente
	$clientes = mysqli_fetch_assoc($resultado);

	//fecha a conexão do MYSQL
	mysqli_close($conexao);	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manter Cliente</title>
</head>
<body>
	<h1>Atualização dos dados dos clientes</h1>
	<form action="atualizar_cliente.php" method="post">
		<input type="hidden" name="id_clientes" value="<?= $clientes['id'] ?>">

		<label>Nome:</label>
		<input type="text" name="txtnome" value="<?= $clientes['nome'] ?>">

		<label>Email:</label>
		<input type="text" name="txtemail" value="<?= $clientes['email'] ?>">

		<label>Telefone:</label>
		<input type="text" name="txttelefone" value="<?= $clientes['telefone'] ?>">

		<label>Cidade:</label>
		<input type="text" name="txtcidade" value="<?= $clientes['cidade'] ?>">
		<label>Bairro:</label>
		<input type="text" name="txtbairro" value="<?= $clientes['bairro'] ?>">

		<input type="submit" value="Atualizar" name="acao">
	</form>
</body>
</html>