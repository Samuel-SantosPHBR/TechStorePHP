<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Tela de Compra</title>
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
    <h2>Compra de Produto</h2>
  </div>
</div>

<?php
					require_once '../classes/Conexao.php';
				    require_once '../DAO/ProdutoDAO.php';

				    $id = $_GET['id'];
				    $bd = new Conexao();
	                $dao = new ProdutoDAO();
			      	foreach ($bd->busca($dao->consultar()) as $linha) {
                    	if($linha['id']===$id){
					echo'	
<div class="container" style="margin: 0 auto; width: 60%">

	<div class="row">
	
		<div class="col-md-4">
			<!-- ESTE BLOCO AQUI PEGA OS DADOS DO BANCO -->
			<h5>'.$linha['nome'].'</h5>
			<p>'.$linha['descricao'].'</p>
		</div>
	
		<div class="col-md-4">
			<table class="table table-striped table-bordered">
				<tr>
							<th>Quantidade</th>
							<th>Ação</th>
							<th>Ação</th>
						</tr>
						<tbody>
							<tr>
								<form action="../banco/cadastrarPedido.php" method="post">
									<th><input type="number" name="quantidade" class="form-control" min="1" value="1"></th>
									<input type="hidden" name="id" value="'.$id.'">
									<input type="hidden" name="descricao" value="'.$linha['nome'].'<br>'.$linha['descricao'].'">
									<input type="hidden" name="vendedor" value="'.$linha['vendedor'].'">
									<th><input type="submit" class="btn btn-success" value="Comprar" ></th>
									<th><button class="btn btn-danger" value="Resetar">Cancelar</button></th>
								</form>
							</tr>
						</tbody>
			</table>
		</div>
	</div>
</div>

';
						}
					}
				?>

	<?php
      include('../menus/rodape.php');
    ?>
			

</body>
</html>