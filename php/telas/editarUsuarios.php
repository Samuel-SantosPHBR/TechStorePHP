<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Editar Perfil</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="../../imagens/icone.png">
      <link rel="stylesheet" href="..\..\css\bootstrap.css">
      <script src="..\..\javascript\jquery.min.js"></script>
      <script src="..\..\javascript\bootstrap.js"></script>
  </head>
  <body>  

    <?php
      include('../menus/menu.php');
    ?>

  <div class="jumbotron jumbotron-fluid" align="center">
    <div class="container">
      <h2>Editar Perfil</h2>
    </div>
  </div>
  <?php
    require_once '../classes/Conexao.php';
    require_once '../DAO/UsuarioDAO.php';

    $bd = new Conexao();
    $dao = new UsuarioDAO();

    foreach ($bd->busca($dao->consultar()) as $linha) {
      if($linha['email']===$_SESSION['logado']){
        echo'
        <div class="container" style="max-width: 500px">
          <form action="../banco/editar/editarUsuario.php" method="post">
            <div class="form-group">
              <label for="usuario"> Nome </label>
              <input class="form-control" type="text" name="nome" placeholder="Insira seu Nome" required="" value="'.$linha['nome'].'">
            </div>
            <div class="form-group">
              <label for="Telefone"> Telefone </label>
              <input class="form-control" type="text" name="telefone" placeholder="(21)9999-9999" required="" value="'.$linha['telefone'].'">
            </div>
            <div class="form-group">
              <label for="email"> Email </label>
              <input class="form-control" type="email" name="email" placeholder="exemplo@exemplo.com" required="" value="'.$linha['email'].'">
            </div>
            <div class="form-group">
              <label for="senha"> Senha </label>
              <input class="form-control" type="password" name="senha" placeholder="********" required="" value="'.$linha['senha'].'">
            </div>
            <div class="form-group">
              <label for="endereco"> Endereço </label>
              <input type="hidden" name="id" value="'.$linha['id'].'">
              <input class="form-control" type="text" name="endereco" placeholder="Rua sem saida" required="" value="'.$linha['endereco'].'">
            </div>
            <div class="form-group">
              <label for="cpf"> CPF/CNPJ </label>
              <input class="form-control" type="text" name="cpfecnpj" placeholder="XXX.XXX.XXX-XX" required="" value="'.$linha['cpf_cnpj'].'">
            </div>
            <div class="form-group">
              <label for="tipo"> Tipo: </label>
              <input type="radio" name="tipo" value="user"> Tecnico
              <input type="radio" name="tipo" value="vend" checked>Vendedor
            </div>
            <div class="form-group">
            <label for="aniversario"> Aniversario </label>
            <input class="form-control" type="date" name="aniversario" placeholder="12/12/12" required="" value="'.$linha['aniversario'].'">
            </div>
            <input class="btn btn-primary" type="submit" value="Atualizar">
            <a href="perfilUsuario.php" class="btn btn-warning">Voltar</a>
          </form>
        </div>
  ';}}
  ?>

  <?php
      include('../menus/rodape.php');
    ?>

  </body>
</html>