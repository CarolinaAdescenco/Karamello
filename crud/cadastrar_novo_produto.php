	<?php
		include_once '../head_admin.php'; 
    ?>

    <title>Novo Produto</title>


	<h1>Cadastrar Produto</h1>
	<div class="tela-cadastro">
		<form class="form" action="../sistema/cadastrar_produto.php" method="post">

		<label>Tipo:</label>
		<input type="text" name="txttipo" id="txttipo" placeholder="Informe o tipo do produto.">

		</br>

		<label>Sabor:</label>
		<input type="text" name="txtsabor" id="txtsabor" placeholder="Informe o sabor.">

		</br>

		<label>Quantidade:</label>
		<input type="number" name="txtquantidade" id="textquantidade" placeholder="Infome a quantidade.">

		</br>

		<label>Valor Unitário:</label>
		<input type="text" name="txtvalorUnitario" id="textvalorUnitario" placeholder="Informe o valor unitário.">

		</br>

		<input type="submit" value="Enviar" name="acao">

	</form>
	</div>
	
	


	<script src="../percorre.js"></script>
	<script src="../calcula-valor-total.js"></script>
	<script src="../imprime-produto.js"></script>
			

</body>
</html>