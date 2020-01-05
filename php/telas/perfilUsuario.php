<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Meu Perfil</title>
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
            <div class="container" style="margin-top: 120px; max-width: 500px;">
            <h2 style="text-align: center;">Dados do Perfil: </h2>
                <div class="panel panel-primary">
                    <div class="panel-body">
                      <form action=..\banco\login.php method=post>
                      <?php
                        require_once '../classes/Conexao.php';
                        require_once '../DAO/UsuarioDAO.php';

                        $bd = new Conexao();
                        $dao = new UsuarioDAO();

                        foreach ($bd->busca($dao->consultar()) as $linha) {
                          if($linha['email']===$_SESSION['logado']){
                            echo '<div class="form-group">
                                      <p class="form-control" href=>Nome: '.$linha['nome'].'</p> 
                                      <p class="form-control" href=>Email: '.$linha['email'].'</p>
                                      <p class="form-control" href=>Endereço: '.$linha['endereco'].'</p>
                                      <p class="form-control" href=>Data Nascimento: '.$linha['aniversario'].'</p>    
                                      <p class="form-control" href=>Tipo: '.$linha['tipo'].' </p>
                                      <a href="editarUsuarios.php?id='.$linha['id'].'" class="btn btn-warning">Editar Perfil</a>
                                      <a class="btn btn-danger" onclick="excluir('.$linha['id'].',1)">Excluir Conta</a>
                                  </div>'
                                  ;
                          }
                        }
                        $bd->desconectar();
                        
                      ?>
                      </form>
                    </div>
                    <div class="panel-footer">
                  </div>
              </div>
        </div>

        <?php
      include('../menus/rodape.php');
    ?>
    </body>
</html>
