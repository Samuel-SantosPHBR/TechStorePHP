<?php
	session_start();
	if(!isset($_SESSION['logado'])){
       	echo "<script> window.location.href = '../../index.php';</script>";
    }
	$id = $_POST['id'];
	$quantidade = $_POST['quantidade'];
	$descricao = $_POST['descricao'];
	$comprador = $_SESSION['logado'];
	$vendedor = $_POST['vendedor'];

	require_once '../classes/Conexao.php';
	require_once '../classes/Pedido.php';
	require_once '../DAO/PedidoDAO.php';
	

	$bd = new Conexao();

	$pedido = new Pedido($descricao,$quantidade,0,$id,$vendedor,$comprador);

	$dao = new PedidoDAO();

	$bd->insert($dao->sqlInserir($pedido));
	
	echo "<script> window.location.href = '../../index.php';</script>";
	
?>