<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">

</head>
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