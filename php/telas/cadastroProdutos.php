<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro de Produto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="..\..\css\bootstrap.css">
      <link rel="icon" href="../../imagens/icone.png">
    <script src="..\..\javascript\jquery.min.js"></script>
    <script src="..\..\javascript\bootstrap.js"></script>

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
        <h2>Cadastrar Produto</h2>
      </div>
    </div>

    <div class="container" style="max-width: 500px">
      <form action="../banco/cadastrarProduto.php" method="post">
        <div class="form-group">
          <label for="usuario"> Nome </label>
          <input class="form-control" type="text" name="nome" placeholder="Insira seu Nome" required="">
        </div>
        <div class="form-group">
          <label for="senha"> Preço </label>
          <input class="form-control" type="number" step="0.01" name="preco" placeholder="R$ 0,00" required="" >
        </div>
        <div class="form-group">
          <label for="senha"> Descrição </label>
          <input class="form-control" type="text" name="descricao" placeholder="Descrição Aqui" required="">
        </div>
          <input class="btn btn-success" type="submit" value="Cadastrar">
          <a href="..\..\index.php" class="btn btn-warning">Voltar</a>
      </form>
    </div>
    <?php
      include('../menus/rodape.php');
    ?>
  </body>
</html>