function excluir(parametro,tipo) {
	if (tipo==0) {
		if (confirm("Deseja Excluir?")) {
	           window.location.href = '../../../php/banco/excluir/excluirProdutos.php?id='+parametro;
	    }else {

		}
	} if(tipo==1){
		if (confirm("Deseja Excluir?")) {
	           window.location.href = '../../../php/banco/excluir/excluirUsuario.php?id='+parametro;
	    }else {

		}
	}if(tipo==2){
		if (confirm("Deseja Excluir?"+parametro)) {
	           window.location.href = '../../../php/banco/excluir/excluirPedido.php?id='+parametro;
	    }else {

		}
	}
}