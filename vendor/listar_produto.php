<?php 
	//inclui o arquivo de conexão
	require_once 'conexaobanco.php';

	//consulta todos os cadastros
	$sql = "SELECT * FROM cadastroprodutos";

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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <img src="img/Karamello/logo4.png" class="navbar-brand js-scroll-trigger" id="logo" href="#page-top">
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-black  rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="listar_produto.php">Produtos</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="listar_cliente.php">Clientes</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Listar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


		<table class="produtos">
			<tr class="cabecalho-tabela">
				<td>Ações</td>
				<td>Tipo</td>
				<td>Sabor</td>
				<td>Quantidade</td>
				<td>Valor Unitário</td>
        <td>Valor Total</td>
			</tr>

			<?php while($produtos = $resultado->fetch_assoc()): ?>
				<tr>
					<td>
						<a href="<?= "crud/form_atualiza_produto.php?id_produto={$produtos['id']}" ?>">Atualizar</a>
						<a href="<?= "crud/exclui_produto.php?id_produto={$produtos['id']}" ?>">Excluir</a>
					</td>
					<td><?= $produtos['tipo']; ?></td>
					<td><?= $produtos['sabor']; ?></td>
					<td><?= $produtos['quantidade']; ?></td>
					<td><?= $produtos['valorUnitario']; ?></td>
				</tr>

			<?php endwhile; ?>

			<?php mysqli_close($conexao); ?>
			
		</table>

	<p>Cadastrar <a href="sistema/cadastrar_produto.php">Novo produto</a></p>
</body>
</html>