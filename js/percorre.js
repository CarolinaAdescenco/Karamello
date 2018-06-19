function percorreArray(trsProdutos, comportamento){
	for (var posicaoAtual = 0; posicaoAtual <= trsProdutos.length - 1; posicaoAtual++) {

		var produtoTrAtual = trsProdutos[posicaoAtual];

		comportamento(produtoTrAtual);
		//executa alguma função
	}
}