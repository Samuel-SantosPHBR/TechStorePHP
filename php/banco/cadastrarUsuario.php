<?php
	//variaveis pegadas do $_POST
	$nome = $_POST['nome'];
	$email =  $_POST['email'];
	$senha = $_POST['senha'];
	$tel = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$tipo = $_POST['tipo'];
	$ani = $_POST['data'];
	$cpf = $_POST['cpfecnpj'];

	$controle = 0;

	//Importações de classes
	require_once '../classes/Conexao.php';
	require_once '../classes/Tecnico.php';
	require_once '../classes/Vendedor.php';
	require_once '../DAO/UsuarioDAO.php';

	$bd = new Conexao();

	$dao = new UsuarioDAO();
	
	//variaveis confere se o usuario já existe
	
	foreach ($bd->busca($dao->consultar()) as $linha) {
		if($linha['email']===$email){
			
			$controle=0;	
		}else{
			$controle=1;
		}
		if($controle==0){
			break;	
		}

		
	}

	

	if($controle==1){
		echo "$controle";
		if($tipo==="user"){
			$user = new Tecnico($nome,$email,$senha,$tel,$endereco,$cpf,$tipo,$ani);
		}else{
			$user = new Vendedor($nome,$email,$senha,$tel,$endereco,$cpf,$tipo,$ani);
		}
		$bd->insert($dao->sqlInserir($user));
		header('Location:../../index.php');
	}
	if($controle==0){
		header('Location:../telas/cadastroUsuarios.php');
	}

?>