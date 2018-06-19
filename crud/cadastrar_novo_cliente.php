	<?php
		include_once '../head_admin.php'; 
    ?>

    <title>Novo Cliente</title>
		

	<h1>Cadastro de Clientes</h1>
	<div class="tela-cadastro">
		<form  class="form" action="../sistema/cadastrar_cliente.php" method="post">
		<label class="label">Nome:</label>
		<input type="text" name="txtnome" id="txtnome" placeholder="Informe seu nome.">

		</br>

		<label>Email:</label>
		<input type="text" name="txtemail" id="txtemail" placeholder="Informe seu e-mail.">

		</br>

		<label>Telefone:</label>
		<input type="text" name="txttelefone" id="texttelefone" placeholder="Infome seu telefone.">

		</br>

		<label>Cidade:</label>
		<input type="text" name="txtcidade" id="textcidade" placeholder="Informe a cidade.">

		</br>

		<label>Bairro:</label>
		<input type="text" name="txtbairro" id="textbairro" placeholder="Informe o bairro">

		</br>

		<label>CEP: </label>
		<input type="text" name="txtcep" id="textcep" placeholder="Informe o CEP">

		</br>

		<input type="submit" value="Enviar" name="acao">

	</form>

	</div>
	
</body>
</html>
