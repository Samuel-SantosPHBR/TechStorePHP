<?php
	class Usuario{
		private $nome;
		private $email;
		private $senha;
		private $telefone;
		private $endereco;
		private $tipo;
		private $aniversario;

		public function __construct($nome,$email,$senha,$telefone,$endereco,$tipo,$aniversario){
			$this->setNome($nome);
			$this->setEmail($email);
			$this->setSenha($senha);
			$this->setTelefone($telefone);
			$this->setEndereco($endereco);
			$this->setTipo($tipo);
			$this->setAniversario($aniversario);
		}

		//sets e gets
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setSenha($senha){
			$this->senha = $senha;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function setEndereco($endereco){
			$this->endereco = $endereco;
		}
		public function getEndereco(){
			return $this->endereco;
		}
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function setAniversario($aniversario){
			$this->aniversario = $aniversario;
		}
		public function getAniversario(){
			return $this->aniversario;
		}


		
	}
?>