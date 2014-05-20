	<div class="navbar navbar-default" role="navigation">
	  <div class="container">
	    <a class="navbar-brand" href="index.php">Beetle Escape</a>
	      <ul class="nav navbar-nav">

			<?php
			  if(isset($_SESSION['permissao'])) {
			      $permissao = $_SESSION['permissao'];
			      if($permissao > 0) {
			        include 'templates/menujogador.php';
			      }
			  } else {
			  	echo '
	          <li>
	              <a href="login.php">Login</a>
	          </li>
	          <li>
	              <a href="registro.php">Cadastre-se</a>
	          </li>
	          ';
	      	  }
			?>
	          
	      </ul>
	 </div>
	</div>