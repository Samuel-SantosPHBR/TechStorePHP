<?php
	class UsuarioDAO{
		public function sqlInserir($usuario){
			$sql = "insert into usuario(nome,email,senha,telefone,endereco,cpf_cnpj,tipo,aniversario) 
				values('".$usuario->getNome()."',
				'".$usuario->getEmail()."',
				'".$usuario->getSenha()."',
				'".$usuario->getTelefone()."',
				'".$usuario->getEndereco()."',
				'".$usuario->getCpf_Cnpj()."',
				'".$usuario->getTipo()."',
				'".$usuario->getAniversario()."')";
			return $sql;
		}

		public function consultar(){
			$sql ="select * from usuario";
			return $sql;
		}
		public function excluir($id){
			$sql ="delete FROM usuario WHERE id=$id";
			return $sql;
		}
		public function alterar($id,$usuario){
			$sql ='update usuario SET nome="'.$usuario->getNome().'",telefone="'.$usuario->getTelefone().'",
					email="'.$usuario->getEmail().'",senha="'.$usuario->getSenha().'"
					,endereco="'.$usuario->getEndereco().'",cpf_cnpj="'.$usuario->getCpf_Cnpj().'"
					,tipo="'.$usuario->getTipo().'",aniversario="'.$usuario->getAniversario().'" WHERE 
			id='.$id;
			return $sql;
		}

		public function consultarP(){
			$sql ="select * from pedido inner join peca on (pedido.peca = peca.id)";
			return $sql;
		}

	}
?>