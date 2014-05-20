      <div class="push"></div>
      <div class="jumbotron footer" id="arodape">
          <div class="container">
              <div class="col-md-8" id="mailing-form" >
              <!--
              <h2>Receba as novidades do Beetle Escape!</h2>
              <form action="#" method="post">
              <div class="form-input mailing">
                  <label for="inputNome">Nome</label>
                  <input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome"></input><br>              
              </div>        
              <div class="form-input mailing">
                  <label for="inputEmail">Email</label>
                  <input type="email" class="form-control" id="inputNome" placeholder="Digite seu email"></input>              
              </div> 
              </form>
              -->
                <h2>Últimas novidades do Beetle Escape!</h2>
                <div class="listanoticia">

                  <dl class="dl-horizontal">
                    <?php
                      include 'restrito/conexao.php';
                      $resultado = $conexao->query("SELECT titulo, autor, data, id FROM noticias ORDER BY data DESC LIMIT 5");
                      while ($linha = $resultado->fetch_assoc()){
                        echo '<dt>' . $linha['data'] . '</dt>';
                        echo '<dd> <a href="noticia.php?id=' . $linha['id'] . '">' . $linha['titulo'] .' por '. $linha['autor'] .' </a></dd>';
                      }
                    ?>
                  </dl>
                </div>
                <div class="rss">
                  <a href="rss.php">Assine nosso RSS</a>
                </div>
              </div>
              <div class="col-md-4">
                  <h3>Hijonoob Game Studios</h3><br>
                  Rua Bell Aliance, 225<br>
                  Jd. São Caetano<br>
                  São Caetano do Sul<br>
                  SP - 09581-420
              </div>
          </div>
      </div>
    </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>