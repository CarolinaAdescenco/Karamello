<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<h1>Cadastro de Clientes</h1>
	<form action="cadastrar.php" method="post">
		<label>Nome:</label>
		<input type="text" name="txtnome" id="txtnome" placeholder="Informe seu nome.">

		<label>Email:</label>
		<input type="text" name="txtemail" id="txtemail" placeholder="Informe seu e-mail.">

		<label>Telefone:</label>
		<input type="text" name="txttelefone" id="texttelefone" placeholder="Infome seu telefone.">

		<label>Cidade:</label>
		<input type="text" name="txtcidade" id="textcidade" placeholder="Informe a cidade.">

		<label>Bairro:</label>
		<input type="text" name="txtbairro" id="textbairro" placeholder="Informe o bairro">

		<label>CEP: </label>
		<input type="text" name="txtcep" id="textcep" placeholder="Informe o CEP">

		<input type="submit" value="Enviar" name="acao">

	</form>

</body>
</html>
