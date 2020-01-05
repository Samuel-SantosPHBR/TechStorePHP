<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="../../imagens/icone.png">
  <link rel="stylesheet" href="..\..\css\bootstrap.css">
  <script src="..\..\javascript\jquery.min.js"></script>
  <script src="..\..\javascript\bootstrap.js"></script>
</head>
<body>  

<div class="container" style="margin-top: 120px; max-width: 500px;">
	<h2 style="text-align: center;">Login</h2>
		<div class="panel panel-primary">
			<div class="panel-body">
				<form action=..\banco\login.php method=post>
					<div class="form-group">
						<label for="usuario"> Usuário </label>
						<input class="form-control" type="text" name="email" placeholder="Exemplo" required="">
					</div>
					<div class="form-group">
						<label for="senha"> Senha </label>
						<input class="form-control" type="password" name="senha" placeholder="********" required="">
					</div>
					<input class="btn btn-success" type="submit" value="Acessar">
					<a href="..\..\index.php" class="btn btn-warning">Voltar</a>
				</form>
			</div>
			<div class="panel-footer">
			</div>
		</div>
</div>
<?php

	$erro = 0;
	if(isset($_GET['erro']))
		$erro = $_GET['erro'];

	if($erro == 1){
		echo '<br><center><strong class="alert alert-danger">Usuario ou senha invalidos</strong><center>';
	}
?>

</body>
</html>