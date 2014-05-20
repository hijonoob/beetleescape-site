<?php
	include 'templates/header.php';
	include 'templates/checagestao.php';
?>
			<?php
				include 'restrito/conexao.php';
				$id = htmlspecialchars($_GET["id"]);
				if($id){
					if ($sql = $conexao->prepare("SELECT titulo, descricao, autor, data, texto FROM noticias WHERE id = ?")) {
						$sql->bind_param('i', $id);
						$sql->execute();
						$sql->bind_result($titulo, $descricao, $autor, $data, $texto);
						$idAntiga = $id;
						$sql->fetch();
						if ($titulo == ''){
							echo "<div class='alert alert-info'> Notícia não encontrada </div>";
						}
						$sql->close();
					}
				}
			?>

			<h2> <?php echo $titulo; ?> </h2>
			<h3> <?php echo $descricao; ?> </h3>
			<span class="noticiaautor">Por: <?php echo $autor; ?>. </span> 
			<span class="noticiadata">Publicada em: <?php echo $data; ?></span> 
			<p class="noticiatexto"><?php echo $texto; ?></p>
			<?php
				if ($titulo == ''){
					echo "<div class='alert alert-info'> Notícia não encontrada </div>";
				}
			?>


		</div>	

<?php include 'templates/footer.php' ?>