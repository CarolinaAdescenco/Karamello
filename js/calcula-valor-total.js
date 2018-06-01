//Para fazer funcionar dinamicamente
var trsProdutos = document.getElementsByClassName("produto"); //array de trs que são os pacientes 

for (var posicaoAtual = 0; posicaoAtual <= trsProdutos.length - 1; posicaoAtual++) {
	
	//pega a classe tr > produto
	var produtoTr = trsProdutos[posicaoAtual];

	//pega a classe do atributo
	var tdTipo =produtoTr.getElementsByClassName("info-tipo")[0];
	var tdSabor =produtoTr.getElementsByClassName("info-sabor")[0];
	var tdQuantidade =produtoTr.getElementsByClassName("info-quantidade")[0];
	var tdValor_unitario =produtoTr.getElementsByClassName("info-valor")[0];
	var tdTotal = produtoTr.getElementsByClassName("info-total")[0];

	//cria um objeto do tipo produto
	//função não está em um escopo global
	var produtoAtual = {tipo : tdTipo.textContent, 
				        sabor: tdSabor.textContent,
				   		quantidade: tdQuantidade.textContent,
				   		valor_unitario: tdValor_unitario.textContent,
				   		pegaTotal : function(){ //função anonima
				   			//para pegar o valor total do produto
							if (this.valor_unitario != 0){
								
								var total = this.quantidade * this.valor_unitario;
								return total;
								
							} else {

								console.log("Ops! Valor unitário deve ser maior que zero");
							
							}
				   		} 
				   	};
	
	var total = produtoAtual.pegaTotal(); 

	var tdTotal = produtoTr.getElementsByClassName("info-total")[0];
	tdTotal.textContent = total;

	console.log(total);
	
}

	