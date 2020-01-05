<?php
	session_start();
	if(!isset($_SESSION['logado'])){
       	echo "<script> window.location.href = '../../../index.php';</script>";
    }
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email =  $_POST['email'];
	$senha = $_POST['senha'];
	$tel = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$tipo = $_POST['tipo'];
	$ani = $_POST['aniversario'];
	$cpf = $_POST['cpfecnpj'];

	require_once '../../classes/Conexao.php';
	require_once '../../classes/Tecnico.php';
	require_once '../../classes/Vendedor.php';
	require_once '../../DAO/UsuarioDAO.php';

	$bd = new Conexao();

	if($tipo==="user"){
		$usuario = new Tecnico($nome,$email,$senha,$tel,$endereco,$cpf,$tipo,$ani);
	}else{
		$usuario = new Vendedor($nome,$email,$senha,$tel,$endereco,$cpf,$tipo,$ani);
	}

	$dao = new UsuarioDAO();

	$bd->update($dao->alterar($id,$usuario));

	$_SESSION['tipo'] = $_POST['tipo'];

	header('Location:../../telas/perfilUsuario.php');
	

?>