<?php session_start(); ?>
<?php include 'templates/header.php' ?>

      <?php
        include 'restrito/conexao.php';
        
        if( isset( $_POST['logar'] ) ):
          $uName = $_POST['uName']; 
          $passW = $_POST['passw'];
          // validar os dados
          // inserir usuário no banco
          
          include_once $_SERVER['DOCUMENT_ROOT'] . '/beetleescape/securimage/securimage.php';
          $securimage = new Securimage();
          if ($securimage->check($_POST['captcha_code']) == false) {
            echo "<div class='alert alert-info'> Captcha incorreto, favor tentar novamente. </div>";
            exit;
          } else {
            echo "<div class='alert alert-info'> Tentando logar. </div>";
          }
        endif;
      ?>

      <div id="login">
          <form action="login.php" method="post">  
            <div class="form-input login-form" >
                <label for="uName">Usuário</label>
                <input name="uName" type="text" class="form-control" id="uName" placeholder="Digite seu nome de usuário"></input>
            </div>
            <div class="form-input login-form">
                <label for="passw">Senha</label>
                <input name="passw" type="password" class="form-control" id="passw" placeholder="Senha"></input><br>
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
<?php include 'templates/footer.php' ?>