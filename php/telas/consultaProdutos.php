<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Gerenciar Produtos</title>
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
        <h2 id="demo">Gerenciar Meus Produtos</h2>
      </div>
    </div>
    
    <div class="container">
      <a class="btn btn-default" href="..\..\index.php">Voltar</a>
      <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Preço</th>
          <th>Descricao</th>
          <th>Ação</th>
        </tr>
      </thead>
      <?php
          require_once '../classes/Conexao.php';
          require_once '../DAO/ProdutoDAO.php';

          $bd = new Conexao();
          $dao = new ProdutoDAO();

          foreach ($bd->busca($dao->consultar()) as $linha) {
            if($linha['vendedor']===$_SESSION['logado'])
            echo '<tbody>
            <tr>
              <td>'.$linha['nome'].'</td>
              <td>'.$linha['preco'].'</td>
              <td>'.$linha['descricao'].'</td>
              <td>
              <a class="btn btn-warning btn-xs" href="editarProdutos.php?id='.$linha['id'].'">Editar</a>
              <a class="btn btn-danger btn-xs" onclick="excluir('.$linha['id'].',0)">Excluir</a>
              </td>
            </tr>
          </tbody>';
          }

        ?>

          
      </table>
      <a href="../../../php/telas/cadastroProdutos.php" class="btn btn-success">+</a>
    </div>

    <?php
      include('../menus/rodape.php');
    ?>

  </body>
</html>