<?php 
	//inclui o arquivo de conexão
	require_once '../conexaobanco.php';


	//GET quando passa o valor no link da url
	//POST envia de uma forma mais segura


	//recupera dados do post
	$id = $_POST["id_produto"];
	$tipo = $_POST["txttipo"];
	$sabor = $_POST["txtsabor"];
	$quantidade = $_POST["txtquantidade"];
	$valor = $_POST["txtvalorUnitario"];


	//consulta todos os cadastros
	$sql = "UPDATE cadastroprodutos2 SET tipo='$tipo', sabor='$sabor', quantidade='$quantidade', valor='$valor'";


	echo $sql;


	$resultado = mysqli_query($conexao, $sql);

	echo $resultado;

	//retorna a quantidade de linhas modificadas na tabela
	//$linhas= mysqli_affected_rows($resultado);

	if($resultado === TRUE){

		echo "Produto atualizado com sucesso!"."</br>";
		echo "<a href='http://localhost/Karamello/listar_produto.php'>Voltar</a>";
	}
	else{
		echo "Operação não realizada!";
	}

	 //Fecha a conexão
	mysqli_close($conexao);


 ?>


