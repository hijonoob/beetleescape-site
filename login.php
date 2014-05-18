<?php include 'templates/header.php' ?>
      <div id="login">
          <form action="php/login.php" method="post">  
            <div class="form-input login-form" >
                <label for="uName">Usuário</label>
                <input name="uName" type="text" class="form-control" id="uName" placeholder="Digite seu nome de usuário"></input>
            </div>
            <div class="form-input login-form">
                <label for="passw">Senha</label>
                <input name="passw" type="password" class="form-control" id="passw" placeholder="Senha"></input><br>
            </div>
            <button type="submit" class="btn btn-default">Entrar</button> 
          </form>
      </div>
<?php include 'templates/footer.php' ?>