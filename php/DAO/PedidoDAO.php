<?php
	class PedidoDAO{
		public function sqlInserir($pedido){
			$sql = "insert into pedido(descricao,quantidade,avaliacao,peca,vendedor,comprador) 
				values('".$pedido->getDescricao()."',
				'".$pedido->getQuantidade()."',
				'".$pedido->getAvaliacao()."',
				'".$pedido->getPreca()."',
				'".$pedido->getVendedor()."',
				'".$pedido->getComprador()."')";
			return $sql;
		}

		public function consultar(){
			$sql ="select * from pedido inner join usuario on (usuario.email = pedido.comprador) inner join peca on (pedido.peca= peca.id) ";
			return $sql;
		}

		public function consultar2(){
			$sql ="select * from pedido";
			return $sql;
		}

		public function excluir($id){
			$sql ="delete FROM pedido WHERE id_pedido=$id";
			return $sql;
		}

		public function alterar($id,$tipo){
			
				$sql = 'update pedido set avaliacao='.$tipo.' where id_pedido='.$id;	
			

			return $sql;
		}
	}
?>