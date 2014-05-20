<?php
	include 'templates/header.php';
	include 'templates/checagestao.php';
?>
			<h3> Remoção de notícias </h3>
			<?php
			
				include 'restrito/conexao.php';
				$id = htmlspecialchars($_GET["id"]);
				if($id){
					if ($sql = $conexao->prepare("SELECT titulo FROM noticias WHERE id = ?")) {
						$sql->bind_param('i', $id);
						$sql->execute();
						$sql->bind_result($titulo);
						$sql->fetch();
						$sql->close();
						if ($titulo == ''){
							echo "<div class='alert alert-warning'> Notícia não encontrada </div>";
						} else {
								if ($sql = $conexao->prepare("DELETE FROM noticias WHERE id=?")) {
									$sql->bind_param('i', $id);
									$sql->execute();
									$sql->close();
									echo "<div class='alert alert-success'> Notícia removida </div>";
								} else {
									echo "<div class='alert alert-danger'> Erro ao deletar notícia </div>";
								}
						}
					}
				} else {
					echo "<div class='alert alert-warning'> Notícia não encontrada </div>";
				}
			 ?>

<?php include 'templates/footer.php' ?>