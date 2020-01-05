<?php
	session_start();
	if(!isset($_SESSION['logado'])){
       	echo "<script> window.location.href = '../../index.php';</script>";
    }
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$vendedor = $_SESSION['logado'];

	require_once '../classes/Conexao.php';
	require_once '../classes/Produto.php';
	require_once '../DAO/ProdutoDAO.php';

	$bd = new Conexao();

	$produto = new Produto($nome,$preco,$descricao,$vendedor);

	$dao = new ProdutoDAO();

	$bd->insert($dao->sqlInserir($produto));
	
	header('Location:../telas/consultaProdutos.php');

?>