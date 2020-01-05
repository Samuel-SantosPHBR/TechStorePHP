<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Editar Produto</title>
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
        <h2>Editar Produto</h2>
      </div>
    </div>

    <?php
      require_once '../classes/Conexao.php';
      require_once '../DAO/ProdutoDAO.php';

      $bd = new Conexao();
      $dao = new ProdutoDAO();

      $id = $_GET['id'];

      foreach ($bd->busca($dao->consultar()) as $linha) {
        if($linha['id']==$id){
          echo '

          <div class="container" style="max-width: 500px">
            <form action="../banco/editar/editarProduto.php" method="post">
              <div class="form-group">
                <label for="usuario"> Nome </label>
                <input class="form-control" type="text" name="nome" placeholder="Insira seu Nome" required="" value="'.$linha['nome'].'">
              </div>
              <div class="form-group">
                <label for="senha"> Preço </label>
                <input class="form-control" type="number" name="preco" placeholder="R$ 0,00" required="" value='.$linha['preco'].'>
              </div>
              <div class="form-group">
                <label for="senha"> Descrição </label>
                <input type="hidden" name="id" value="'.$id.'">
                <input class="form-control" type="areatext" name="descricao" required="" placeholder="Descrição Aqui" value="'.$linha['descricao'].'">
              </div>
              <input class="btn btn-primary" type="submit" value="Atualizar">
              <a href="consultaProdutos.php" class="btn btn-warning">Voltar</a>
            </form>
          </div>'
          ;
       }}
    ?>

    <?php
      include('../menus/rodape.php');
    ?>

  </body>
</html>