<?php
	require_once 'Usuario.php';
	class Vendedor extends Usuario{

		private $cnpj;

		public function __construct($nome,$email,$senha,$telefone,$endereco,$cnpj,$tipo,$aniversario){
			parent::__construct($nome,$email,$senha,$telefone,$endereco,$tipo,$aniversario);
			$this->setCpf_Cnpj($cnpj);
		}

		public function setCpf_Cnpj($cnpj){
			$this->cnpj = $cnpj;
		}
		public function getCpf_Cnpj(){
			return $this->cnpj;
		}


	}


?>