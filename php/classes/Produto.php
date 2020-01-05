<?php
    class Produto{

		private $nome;
		private $preco;
		private $descricao;
		private $vendedor;

		public function __construct($nome,$preco,$descricao,$vendedor){
			$this->setNome($nome);
			$this->setPreco($preco);
			$this->setDescricao($descricao);
			$this->setVendedor($vendedor);
		}

		

		//sets e gets
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setPreco($preco){
			$this->preco = $preco;
		}
		public function getPreco(){
			return $this->preco;
		}
		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}
		public function getDescricao(){
	        return $this->descricao;
		}

		public function setVendedor($vendedor){
			$this->vendedor = $vendedor;
		}
		public function getVendedor(){
	        return $this->vendedor;
		}
    }
?>