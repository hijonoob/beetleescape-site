<?php
if(isset($_SESSION['permissao'])) { // se deslogado, redireciona
  $permissao = $_SESSION['permissao'];
  if(!$permissao > 1) { // se não gestor, redireciona
    header('Location: login.php');
  }
} else {
	header('Location: login.php');
}
?>