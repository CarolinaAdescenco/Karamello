<?php 
	
	require_once 'conexaobanco.php';

	session_start();

	$login = $_POST['txtlogin'];
	$senha = $_POST['txtsenha'];

	if (empty($login)) {
		$_SESSION['mensagem'] = "Preencha o campo de login";
		header("Location: login_usuario.php");
	} else if(empty($senha)){
		$_SESSION['mensagem'] = "Preencha o campo senha";
		header("Location: login_usuario.php");
	}
	else{
		$sql = "SELECT * FROM login_acesso WHERE login='$login' AND senha='$senha'";
		$resultado = mysqli_query($conexao, $sql);
		$dados = mysqli_fetch_assoc($resultado);

		//var_dump($dados['login'] == $login and $dados['senha'] == $senha); die;

		if($dados['login'] == $login and $dados['senha'] == $senha){

			$usuario = array("login" => $dados['login'], "senha"=> $dados['senha'], "perfil"=>$dados['perfil']);

			$_SESSION['usuario']= $usuario;

			header("Location: admin.php");
		} 
		else{
			$_SESSION['mensagem'] = "Login ou senha inválidos";
			header("Location: login_usuario.php");
		}
	}

?>