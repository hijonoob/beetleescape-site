<?php
if(isset($_SESSION['permissao'])) { // se deslogado, redireciona
  $permissao = $_SESSION['permissao'];
  if(!$permissao > 0) { // se não jogador, redireciona
    header('Location: login.php');
  }
} else {
	header('Location: login.php');
}
?>