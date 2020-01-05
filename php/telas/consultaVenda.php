<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Consulta de Vendas</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="..\..\css\bootstrap.css">
      <link rel="icon" href="../../imagens/icone.png">
    <script src="..\..\javascript\jquery.min.js"></script>
    <script src="..\..\javascript\bootstrap.js"></script>
    <script src="..\..\javascript\auxiliares.js"></script>
    
  </head>
  <body>  

    <?php
      	include('../menus/menu.php');
    	if($_SESSION['tipo']==="vend"){

    	}else{
    		 echo "<script> window.location.href = '../../../index.php';</script>";
    	}
    ?>
	  <div class="jumbotron jumbotron-fluid" align="center">
	    <div class="container">
	      <h2>Consulte suas Vendas</h2>
	    </div>
	  </div>
	  
	  <div class="container">
	  <table class="table table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Quantidade</th>
				<th>Preço</th>
				<th>Comprador</th>
				<th>Nota</th>
				<th>Tel</th>
				<th>Ação</th>
			</tr>
		</thead>
		<?php
          require_once '../classes/Conexao.php';
          require_once '../DAO/PedidoDAO.php';

          $bd = new Conexao();
          $dao = new PedidoDAO();

          foreach ($bd->busca($dao->consultar()) as $linha) {
            if($linha['vendedor']===$_SESSION['logado']){
            	$quant = $linha['quantidade'];
            	$pf = $linha['preco']*$quant;
            echo '<tbody>
			<tr>
				<td>'.$linha['nome'].'</td>
				<td>'.$linha['descricao'].'</td>
				<td>'.$linha['quantidade'].'</td>
				<td>'.$pf.'</td>
				<td>'.$linha['comprador'].'</td>
				<td>'.$linha['avaliacao'].'</td>
				<td>'.$linha['telefone'].'</td>
				<td>
				<a class="btn btn-primary btn-xs" onclick="excluir('.$linha['id_pedido'].',2)">Fechar</a>
				</td>
			</tr>
		</tbody>';}
          }

        ?>
			  
	  </table>
	  </div>

	  <?php
      include('../menus/rodape.php');
    ?>

  </body>
</html>