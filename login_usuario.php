<?php 
    include_once 'head.php';
?>

<header>
	<img src="">
</header>	
<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <img src="img/Karamello/logo4.png" class="navbar-brand js-scroll-trigger" id="logo" href="#page-top">
      </div>
    </nav>

    <!--Área de login -->
	<div class="container-login">
		<img src="img/icon/login.png" alt="Login">
		<form action="valida_usuario.php" method="post">
			<input class="label" type="text" placeholder="Usuário" name="txtlogin"></br>			
			<input class="label" type="password" placeholder="Senha" name="txtsenha"></br>
			<input class="label" id="submit" type="submit" name="acao" value="Acessar">
		</form>

	<?php 
		session_start();
		if(isset($_SESSION['mensagem'])){
			
			$msg = $_SESSION['mensagem'];

			echo '<p>' .$msg.'</p>';
			unset($_SESSION['mensagem']);
		}
	?>
	</div>

	

</body>
</html>