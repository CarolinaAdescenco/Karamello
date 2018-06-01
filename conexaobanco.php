<?php 

	#$conexao = new mysqli($host, $username, $passwd, $bdname);

	$conexao = new mysqli("localhost", "root", "", "karamello");

	//$host = "localhost";
	//$user = "root";
	//$password = "";
	//database = "phpcrud"


	//$conectdatabase = mysqli_connect($host, $user, $password, $database);


	if(mysqli_connect_errno()){
		exit("Erro ao conectar com o banco de dados!");
	}