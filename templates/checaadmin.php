<?php
if(isset($_SESSION['permissao'])) { // se deslogado, redireciona
  $permissao = $_SESSION['permissao'];
  if(!$permissao > 2) { // se não admin, redireciona
    header('Location: login.php');
  }
} else {
	header('Location: login.php');
}
?>