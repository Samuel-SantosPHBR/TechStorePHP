<?php
	session_start();
	if(!isset($_SESSION['logado'])){
       	echo "<script> window.location.href = '../../index.php';</script>";
    }
    require_once '../classes/Conexao.php';
	require_once '../DAO/PedidoDAO.php';

	$bd = new Conexao();
	$dao = new PedidoDAO();

	$id = $_GET['id'];
	$valor = $_GET['valor'];


	$bd->update($dao->alterar($id,$valor));

	header('Location:../telas/consultaCompra.php');
?>