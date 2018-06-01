<?php 
	//inclui o arquivo de conexão
	require_once 'conexaobanco.php';

	//consulta todos os cadastros
	$sql = "SELECT * FROM cadastroclientes";

	$resultado = mysqli_query($conexao, $sql);

	//Executa SQL
	//$statement = $conexao->prepare($sql);
	//$statement->execute();

	//$result = $statement->get_result();
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Karamello Sorvetes</title>

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

    <!--Custom styles for this page-->
    <link rel="stylesheet" type="text/css" href="css/listar.css">
</head>
<body id="page-top">

    <!-- Navigation
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Clientes Cadastrados</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-black  rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Produtos</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="listar.php">Clientes</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Estoque</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    -->


		<table class="clientes">
			<tr class="cabecalho-tabela">
				<td>Ações</td>
				<td>Nome</td>
				<td>E-mail</td>
				<td>Telefone</td>
				<td>Cidade</td>
				<td>Bairro</td>
			</tr>

			<?php while($clientes = $resultado->fetch_assoc()): ?>
				<tr>
					<td>
						<a href="<?= "crud/form_atualiza_cliente.php?id_cliente={$clientes['id']}" ?>">Atualizar</a>
						<a href="<?= "crud/exclui_cliente.php?id_cliente={$clientes['id']}" ?>">Excluir</a>
					</td>
					<td><?= $clientes['nome']; ?></td>
					<td><?= $clientes['email']; ?></td>
					<td><?= $clientes['telefone']; ?></td>
					<td><?= $clientes['cidade']; ?></td>
					<td><?= $clientes['bairro']; ?></td>
				</tr>

			<?php endwhile; ?>

			<?php mysqli_close($conexao); ?>
			
		</table>

	<p>Cadastrar <a href="index1.php">Novo cliente</a></p>
</body>
</html>