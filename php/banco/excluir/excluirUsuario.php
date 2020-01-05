<?php
	session_start();
	if(!isset($_SESSION['logado'])){
       	echo "<script> window.location.href = '../../../index.php';</script>";
    }
	$id = $_GET['id'];

	require_once '../../classes/Conexao.php';
	require_once '../../DAO/UsuarioDAO.php';

	$bd = new Conexao();

	$dao = new UsuarioDAO();

	$bd->del($dao->excluir($id));

	header('Location:../deslogar.php');

?>