<?php
	include 'templates/header.php';
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
							echo "<div class='alert alert-warning'> Notícia não encontrada </div>";
						}
						$sql->close();
					}
				}
			?>

			<h2> <?php echo $titulo; ?> </h2>
			<h3> <?php echo $descricao; ?> </h3>
			<hr />
			<div class="byline">
				<span class="noticiaautor"><?php if ($titulo != ''){ echo 'Por: ' . $autor . '.'; } ?></span> 
				<span class="noticiadata"><?php if ($titulo != ''){ echo 'Publicada em: ' . $data; }?></span> 
			</div>
			<p class="noticiatexto"><?php echo $texto; ?></p>
		</div>	

<?php include 'templates/footer.php' ?>