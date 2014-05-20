<?php include 'templates/header.php' ?>

      <?php
        include 'restrito/conexao.php';
        
        if( isset( $_POST['logar'] ) ) {
          $usuario = trim(strip_tags($_POST['usuario'])); 
          $senha = trim(strip_tags($_POST['senha']));
          // validar captcha
          include_once $_SERVER['DOCUMENT_ROOT'] . '/beetleescape/securimage/securimage.php';
          $securimage = new Securimage();
          if ($securimage->check($_POST['captcha_code']) == false) {
            // captcha errado
            echo "<div class='alert alert-warning'> Captcha incorreto, favor tentar novamente. </div>";
          } else {
            // captcha certo - verificar senha
              if ($usuario=='' || $senha=='') {
                echo "<div class='alert alert-warning'> Usuário e senha devem ser preenchidos. </div>";
              } else {
                if ($sql = $conexao->prepare("SELECT senha, permissao FROM usuarios WHERE usuario = ?")) {
                  $sql->bind_param('s', $usuario);
                  $sql->execute();
                  $sql->bind_result($senhacomparacao, $permissao);
                  $sql->fetch();
                  if ($senhacomparacao == ''){
                    echo "<div class='alert alert-danger'> Erro ao conectar, favor tentar novamente </div>"; // Usuário não encontrado
                  } else {
                      $senhacomp = crypt($senha, $senhacomparacao);
                      if($senhacomparacao == $senhacomp) {
                        // logado, cria as sessões
                        $_SESSION['usuario']=$usuario;
                        $_SESSION['permissao']=$permissao;
                        header('Location: login.php');
                        exit;
                      } else {
                          echo "<div class='alert alert-danger'>Erro ao conectar, favor tentar novamente </div>"; // senha incorreta

                      }
                  }
                  $sql->close();
                }
              }
          }
        }
      if(isset($_SESSION['permissao'])) {
        echo "<div class='alert alert-success'>Você está logado </div>";
      }
      ?>
      <div id="login">
          <form action="login.php" method="post">  
            <div class="form-input login-form" >
                <label for="usuario">Usuário</label>
                <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Digite seu nome de usuário" autofocus></input>
            </div>
            <div class="form-input login-form">
                <label for="senha">Senha</label>
                <input name="senha" type="password" class="form-control" id="senha" placeholder="Senha"></input><br>
            </div>
            <div class="form-input login-form">
              <label for="captchainput">Digite o Captcha</label>
              <br />
              <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
              <br />
                <input type="text" name="captcha_code" size="10" maxlength="6" />
                <br />
                <a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">Gerar outra imagem</a>
            </div>
            <button type="submit" name="logar" class="btn btn-default">Entrar</button> 
          </form>
      </div>
  </div>
<?php include 'templates/footer.php' ?>