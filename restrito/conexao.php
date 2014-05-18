<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = 'root';
	$banco = 'beetleescape';
	$conexao = new mysqli($servidor, $usuario, $senha, $banco);

	if ($conexao->connect_errno) {
		echo "<div class='alert alert-info'> Falha ao conectar ao MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "</div>";
	}
?>