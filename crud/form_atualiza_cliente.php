<?php 
	//inclui o arquivo de conexao
	require_once '../conexaobanco.php';

	//recupera o id_clientes
	$id_clientes = $_POST["id_cliente"];

	//consulta os dados do cliente pelo ID
	$consulta_por_id = "select * from cadastroclientes where id = $id_clientes";

	//executa consulta_por_id
	$resultado= mysqli_query($conexao, $consulta_por_id);

	
	//Retorna um array com os dados do cliente
	$clientes = mysqli_fetch_assoc($resultado);

	//fecha a conexão do MYSQL
	mysqli_close($conexao);	

	include_once '../head_admin.php';
?>


	<title>Manter Cliente</title>

    <body>

    <section class="form-atualizacao">
    	<h1>Atualização dos dados dos clientes</h1>
		
		<form class="control-group" action="atualizar_cliente.php" method="post">
		<div form-group floating-label-form-group controls mb-0 pb-2>
			
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

		</div>
	</form>
    	
    </section>
	
</body>
</html>