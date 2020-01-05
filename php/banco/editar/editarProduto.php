<?php
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];

	require_once '../../classes/Conexao.php';
	require_once '../../classes/Produto.php';
	require_once '../../DAO/ProdutoDAO.php';

	session_start();

	$produto = new Produto($nome,$preco,$descricao,$_SESSION['logado']);

	$bd = new Conexao();

	$dao = new ProdutoDAO();

	$bd->update($dao->alterar($id,$produto));

	header('Location:../../telas/consultaProdutos.php');


?>