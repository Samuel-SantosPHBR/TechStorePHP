<?php
	require_once '../classes/Conexao.php';
	require_once '../DAO/UsuarioDAO.php';

	$bd = new Conexao();
	$dao = new UsuarioDAO();
	
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	foreach ($bd->busca($dao->consultar()) as $linha) {
		if($linha['email']===$email && $linha['senha']===$senha){
			session_start();
			$_SESSION['logado'] = $linha['email'];
			$_SESSION['tipo'] = $linha['tipo'];
			$_SESSION['nome'] = $linha['nome'];
			$bd->desconectar();
			echo "<script> window.location.href = '../../index.php';</script>";
		}
	}
	$bd->desconectar();
	echo "<script> window.location.href = '../telas/TelaLogin.php?erro=1';</script>";
	
?>