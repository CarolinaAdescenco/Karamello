<?php 

	require_once '../conexaobanco.php'; #requisição da página de conexao com o banco de dados

	$tipo = $_POST['txttipo'];
	$sabor = $_POST['txtsabor'];
	$quantidade = $_POST['txtquantidade'];
	$valor = $_POST['txtvalorUnitario'];


	$sql = "INSERT INTO cadastroprodutos2 (tipo, sabor, quantidade, valor) 
	values ('$tipo', '$sabor', '$quantidade', '$valor')";
	#comando em php, para diferenciar comandos que vão para o banco de dados, colocar em letras maiusculas

	if (mysqli_query($conexao, $sql)) {
		echo "Cadastro realizado com sucesso!";
		header("location: ../listar_produto.php");
	}
	else{
		echo "Error: ". $sql ."</br>". mysqli_error($conexao);
	}

	mysqli_close($conexao);