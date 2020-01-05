<?php
	class ProdutoDAO{

		public function sqlInserir($produto){
			$sql = "insert into peca(preco,nome,descricao,vendedor) 
				values(".$produto->getPreco().",
				'".$produto->getNome()."',
				'".$produto->getDescricao()."',
				'".$produto->getVendedor()."')";
			return $sql;
		}

		public function consultar(){
			$sql ="select * from peca";
			return $sql;
		}

		public function excluir($id){
			$sql ="delete FROM peca WHERE id=$id";
			return $sql;
		}

		public function alterar($id,$produto){
			$sql ='update peca set nome="'.$produto->getNome().'",preco='.$produto->getPreco().',
					descricao="'.$produto->getDescricao().'" where id='.$id;
			return $sql;
		}

		public function consultarP($pesquisa){
			$sql = "select * from peca where nome like '%".$pesquisa."%'";
			return $sql;
		}

	}

?>