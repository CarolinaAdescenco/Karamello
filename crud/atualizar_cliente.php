<?php 
	//inclui o arquivo de conexão
	require_once '../conexaobanco.php';



	//GET quando passa o valor no link da url
	//POST envia de uma forma mais segura


	//recupera dados do post
	$id = $_POST["id_cliente"];
	$nome = $_POST["txtNome"];
	$email = $_POST["txtEmail"];
	$telefone = $_POST["txtTelefone"];
	$cidade = $_POST["txtCidade"];
	$bairro = $_POST["txtBairro"];


	//consulta todos os cadastros
	$sql = "UPDATE cadastroclientes SET nome={$nome}, email= {$email}, telefone={$telefone}, cidade={$cidade}, bairro={$bairro}";

	$resultado = mysqli_query($conexao, $sql);

	//retorna a quantidade de linhas modificadas na tabela
	//$linhas= mysqli_affected_rows($resultado);

	if($resultado === TRUE){

		echo "Cliente atualizado com sucesso!"."</br>";
		echo "<a href='listar.php'>Voltar</a>";
	}
	else{
		echo "Operação não realizada!";
	}

	 //Fecha a conexão
	mysqli_close($conexaobanco);


 ?>


