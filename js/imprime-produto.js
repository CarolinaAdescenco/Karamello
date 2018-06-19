var trsProdutos = document.getElementsByClassName("produto"); //array de trs que são os pacientes 

percorreArray(trsProdutos, imprimeNome);

function imprimeNome(produtoTr){
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


	console.log(produtoAtual.nome);

}


