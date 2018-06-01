<?php 

	require_once '../conexaobanco.php'; #requisição da página de conexao com o banco de dados

	$nome = $_POST['txtnome'];
	$email = $_POST['txtemail'];
	$telefone = $_POST['txttelefone'];
	$cidade = $_POST['txtcidade'];
	$bairro = $_POST['txtbairro'];


	$sql = "INSERT INTO cadastroclientes (nome, email, telefone, cidade, bairro) values ('$nome', '$email', '$telefone', '$cidade', '$bairro')";
	#comando em php, para diferenciar comandos que vão para o banco de dados, colocar em letras maiusculas

	if (mysqli_query($conexao, $sql)) {
		echo "Cadastro realizado com sucesso!";
		header("location: listar_clientes.php");
	}
	else{
		echo "Error: ". $sql ."</br>". mysqli_error($conexao);
	}

	mysqli_close($conexao);



