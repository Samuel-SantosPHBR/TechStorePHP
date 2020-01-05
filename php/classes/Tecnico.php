<?php
	require_once 'Usuario.php';
	class Tecnico extends Usuario{

		private $cpf;

		public function __construct($nome,$email,$senha,$telefone,$endereco,$cpf,$tipo,$aniversario){
			
			parent::__construct($nome,$email,$senha,$telefone,$endereco,$tipo,$aniversario);
			$this->setCpf_Cnpj($cpf);
		}

		public function setCpf_Cnpj($cpf){
			$this->cpf = $cpf;
		}
		public function getCpf_Cnpj(){
			return $this->cpf;
		}


	}


?>