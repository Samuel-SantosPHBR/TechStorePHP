<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Criar Conta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="..\..\css\bootstrap.css">
      <link rel="icon" href="../../imagens/icone.png">
    <script src="..\..\javascript\jquery.min.js"></script>
    <script src="..\..\javascript\bootstrap.js"></script>
    <script src="../../javascript/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../../javascript/jquery.maskedinput.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $.mask.definitions['~'] = "[+-]";
        $("#date").mask("99/99/9999");
        $("#phone").mask("(99) 99999-9999");
        $("#cpf").mask("999.999.999-99");
    $("#pct").mask("99%");
    });
  
</script>
  </head>
  <body>  

  <div class="jumbotron jumbotron-fluid" align="center">
    <div class="container">
      <h2>Crie sua Conta</h2>
    </div>
  </div>

    <div class="container" style="max-width: 500px">
      <form action=../banco/cadastrarUsuario.php method=post>
        <div class="form-group">
          <label for="usuario"> Nome </label>
          <input class="form-control" type="text" name="nome" placeholder="Insira seu Nome" required="">
        </div>
        <div class="form-group">
          <label for="senha"> Telefone </label>
          <input class="form-control" type="text" name="telefone" placeholder="(21)9999-9999" required="" id="phone">
        </div>
        <div class="form-group">
          <label for="senha"> Email </label>
          <input class="form-control" type="email" name="email" placeholder="exemplo@exemplo.com" required="">
        </div>
        <div class="form-group">
          <label for="senha"> Senha </label>
          <input class="form-control" type="password" name="senha" placeholder="********" required="">
        </div>
        <div class="form-group">
          <label for="senha"> Endereço </label>
          <input class="form-control" type="text" name="endereco" placeholder="Rua sem saida" required="">
        </div>
        <div class="form-group">
          <label for="senha"> CPF/CNPJ </label>
          <input class="form-control" type="text" name="cpfecnpj" placeholder="XXX.XXX.XXX-XX" required="" id="cpf">
        </div>
        <div class="form-group">
          <label for="senha"> Tipo: </label>
          <input type="radio" name="tipo" value="user" checked=""> Tecnico
          <input type="radio" name="tipo" value="vend">Vendedor
        </div>
        <div class="form-group">
          <label for="senha"> Aniversario </label>
          <input class="form-control" type="date" name="data" placeholder="12/12/12" required="">
        </div>
          <input class="btn btn-success" type="submit" value="Cadastrar">
          <a href="..\..\index.php" class="btn btn-warning">Voltar</a>
      </form>
    </div>

  </body>
</html>