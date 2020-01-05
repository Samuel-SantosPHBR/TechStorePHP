<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Consulta de Compras</title>
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
    
    ?>  

  <div class="jumbotron jumbotron-fluid" align="center">
    <div class="container">
      <h2>Consulte suas Compras</h2>
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
			<th>Ação</th>
			
		</tr>
	</thead>
	<?php
          require_once '../classes/Conexao.php';
          require_once '../DAO/PedidoDAO.php';

          $bd = new Conexao();
          $dao = new PedidoDAO();

          foreach ($bd->busca($dao->consultar()) as $linha) {
            if($linha['comprador']===$_SESSION['logado']){
            	$quant = $linha['quantidade'];
            	$pf = $linha['preco']*$quant;
            echo '<tbody>
			<tr>
				<td>'.$linha['nome'].'</td>
				<td>'.$linha['descricao'].'</td>
				<td>'.$linha['quantidade'].'</td>
				<td>'.$pf.'</td>

					<td>
						<a class="btn btn-warning btn-xs" onclick="excluir('.$linha['id_pedido'].',2)">Cancelar</a>
            <a class="btn btn-primary btn-xs" onclick="avaliacao('.$linha['id_pedido'].')">Avaliar</a>
					</td>
				</tr>
				</tbody>
				';}
          }
        ?>
				  
  </table>
  </div>

  </body>

  <script type="text/javascript">
    function avaliacao(id){
      var valor = prompt("Digite uma nota:");
      if (valor!=null)
      {
        window.location.href = '../../../php/banco/Avaliar.php?id='+id+'&valor='+valor;
      }
    }  
  </script>
</html>