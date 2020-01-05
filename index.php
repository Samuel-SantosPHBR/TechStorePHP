
<!DOCTYPE html>
<html>
	<head>
		<title>DHLS - Vendas Tecnologicas</title>
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="icon" href="imagens/icone.png">
		  <link rel="stylesheet" href="css/bootstrap.css">
		  <script src="javascript/jquery.min.js"></script>
		  <script src="javascript/bootstrap.js"></script>
	</head>
	
	<body>
		<header>
			<div id=logo>
			<div id=menus>
				<?php
					session_start();
					if(isset($_SESSION['logado'])){
						echo '<nav class="navbar navbar-expand-md bg-dark navbar-dark">
								  <a class="navbar-brand" href="index.php">DHLS</a>
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
								    <span class="navbar-toggler-icon"></span>
								  </button>
								  <div class="collapse navbar-collapse" id="collapsibleNavbar">
								    <ul class="navbar-nav">';
								      echo '
								      
								      <li class="nav-item">
								        <a class="nav-link" href="php/telas/consultaCompra.php">Minhas Compras</a>
								      </li>';
								      if($_SESSION['tipo']==="vend")
								      	echo '<li class="nav-item">
								        <a class="nav-link" href="php/telas/consultaVenda.php">Minhas Vendas</a>
								      </li>
								      <a class="nav-link" href="./../../php/telas/consultaProdutos.php">Gerenciar Produtos</a>
                          				</li>';

								      echo '<li class="nav-item">
								        <a class="nav-link" href="php/telas/perfilUsuario.php">Perfil</a>
								      </li> 
								      <li>
								      	<a class="nav-link" href="php/banco/deslogar.php">Sair</a>
								      </li>   
								    </ul>
								  </div>
								 	 <form action=index.php method=get>
										<div class="form-group">  
									  		<input type="search" placeholder="Search.." name=pesquisa>
									  		<input type="submit" value="Pesquisar">
									  	</div>
								  	</form>  
								</nav>';
					}else{
						echo '<nav class="navbar navbar-expand-md bg-dark navbar-dark">
								  <a class="navbar-brand" href="index.php">DHLS</a>
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
								    <span class="navbar-toggler-icon"></span>
								  </button>
								  <div class="collapse navbar-collapse" id="collapsibleNavbar">
								    <ul class="navbar-nav">
								      <li class="nav-item">
								        <a class="nav-link" href="php/telas/cadastroUsuarios.php">Criar Conta</a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link" href="php/telas/telaLogin.php">Entrar</a>
								      </li>   
								    </ul>

								  </div>
								  	<form action=index.php method=get>
										<div class="form-group">  
									  		<input type="search" placeholder="Search.." name=pesquisa>
									  		<input type="submit" value="Pesquisar">
									  	</div>
								  	</form>
								</nav>';
					}
					
				?>
				
			</div>
		</header>

		<br><br>

		<section>
			<div class="container">
				<div class="row">



					<?php

						

						require_once 'php/classes/Conexao.php';
						require_once 'php/DAO/ProdutoDAO.php';

						$bd = new Conexao();
						$dao = new ProdutoDAO();

						if(!isset($_GET['pesquisa'])){
							foreach ($bd->busca($dao->consultar()) as $linha) {
								echo '
									<div class="col-md-3">
										<div class="card">
											<h5 class="card-header">'.$linha['nome'].'</h5>
											<div class="card-body">
											<p class="card-text">'.$linha['descricao'].'</p>
											<a href="php/telas/TelaCompra.php?id='.$linha['id'].'" class="btn btn-primary btn-block">Comprar R$: '.$linha['preco'].'</a>
											</div>
										</div>
									</div>
								';
							}
						}else{
							foreach ($bd->busca($dao->consultarP($_GET['pesquisa'])) as $linha) {
								echo '
									<div class="col-md-3">
										<div class="card">
											<h5 class="card-header">'.$linha['nome'].'</h5>
											<div class="card-body">
											<p class="card-text">'.$linha['descricao'].'</p>
											<a href="php/telas/TelaCompra.php?id='.$linha['id'].'" class="btn btn-primary btn-block">Comprar R$: '.$linha['preco'].'</a>
											</div>
										</div>
									</div>
								';
							}
						}
						
					?>

					
				</div>

			</div>
		</section>

		<?php
	      include('php/menus/rodape.php');
	    ?>

	</body>
</html>