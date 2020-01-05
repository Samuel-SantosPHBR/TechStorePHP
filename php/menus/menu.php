<?php
              session_start();
              if(isset($_SESSION['logado'])){
                echo '<nav class="navbar navbar-expand-md bg-dark navbar-dark">
                      <a class="navbar-brand" href="../../">DHLS</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">';
                          echo '
                          
                          <li class="nav-item">
                            <a class="nav-link" href="consultaCompra.php">Minhas Compras</a>
                          </li>';
                          if($_SESSION['tipo']==="vend")
                            echo '<li class="nav-item">
                            <a class="nav-link" href="consultaVenda.php">Minhas Vendas</a>
                          </li>
                          <li>
                            <a class="nav-link" href="../../../php/telas/consultaProdutos.php">Gerenciar Produtos</a>
                          </li>';

                          echo '<li class="nav-item">
                            <a class="nav-link" href="../../../php/telas/perfilUsuario.php">Perfil</a>
                          </li> 
                          <li>
                            <a class="nav-link" href="../banco/deslogar.php">Sair</a>
                          </li>   
                        </ul>
                      </div>
                       <form action=..\..\index.php method=get>
                        <div class="form-group">  
                            <input type="search" placeholder="Search.." name=pesquisa>
                            <input type="submit" value="Pesquisar">
                          </div>
                        </form>  
                    </nav>';
              }else{
                echo "<script> window.location.href = '../../../index.php';</script>";
               }
          

?>