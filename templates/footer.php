      <div class="jumbotron footer" id="arodape">
          <div class="container">
              <div class="col-md-8" id="mailing-form" >
                <h2>Últimas novidades do Beetle Escape!</h2>
                <div class="listanoticia">

                  <dl class="dl-horizontal">
                    <?php
                      include 'restrito/conexao.php';
                      $resultado = $conexao->query("SELECT titulo, autor, data, id FROM noticias ORDER BY data DESC LIMIT 5");
                      while ($linha = $resultado->fetch_assoc()){
                        echo '<dt>' . $linha['data'] . '</dt>';
                        echo '<dd> <a href="noticia.php?id=' . $linha['id'] . '">' . $linha['titulo'] .'</a> por '. $linha['autor'] .'</dd>';
                      }
                    ?>
                  </dl>
                </div>
                <h5><a class="rss_icon" href="rss.php">Assine nosso RSS</a></h5>
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
  </body>
</html>