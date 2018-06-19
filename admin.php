<?php 
	session_start();
	$usuario = $_SESSION['usuario'];


	include_once 'head_admin_principal.php';
?>


<title>Área do Administrador</title>

<body id="page-top">


 

    <div class="boas-vindas">
    	<?php if($usuario['perfil'] != "admin"): ?>

		<?= "Você não tem permissão!"; ?>

		<?php else: ?>

			<h3>Seja bem vindo, <?= $usuario['login']; ?></h3>
			<p>Você tem perfil de acesso: <?= $usuario['perfil']; ?></p>

		<?php endif; ?>	
    	
    </div>
	


</body>
</html>



	
