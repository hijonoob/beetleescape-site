<?php
	include 'templates/checagestor.php';
	include 'templates/header.php';
?>
			<h3> Editar notícia </h3>
			
			<?php
				include 'restrito/conexao.php';
				$id = htmlspecialchars($_GET["id"]);
				if($id){
					if ($sql = $conexao->prepare("SELECT titulo, descricao, autor, data, texto FROM noticias WHERE id = ?")) {
						$sql->bind_param('i', $id);
						$sql->execute();
						$sql->bind_result($titulo, $descricao, $autor, $data, $texto);
						$sql->fetch();
						if ($titulo == ''){
							echo "<div class='alert alert-warning'> Notícia não encontrada </div>";
						} else {
							echo "<div class='alert alert-info'> Notícia encontrada: ID ". $id . "</div>";
						}
						$sql->close();
					}
				}
				
				if( isset( $_POST['editar'] ) ):
					$titulo = $_POST['titulo'];
					$descricao = $_POST['descricao'];
					$autor = $_POST['autor'];
					$data = $_POST['data'];
					$texto = trim($_POST['texto']);
					
					if ($titulo=='' || $descricao=='' || $autor=='' || $data=='' || $texto=='') {
						echo "<div class='alert alert-warning'> Todos os campos devem ser preenchidos. </div>";
					} else {
						$param = $conexao->prepare("UPDATE noticias SET titulo = ?,descricao = ?, autor = ?, data = ?, texto = ? WHERE id = ?");
						$param->bind_param('sssssi', $titulo, $descricao, $autor, $data, $texto, $id);
						if ($param->execute()) {
							echo "<div class='alert alert-success'> Alteração efetuada com sucesso. </div>";
							$param->close();
						}
					}
				endif;
			?>

			<form action="" method="POST" id="editanoticia">
				<label for="titulo"> Título: </label>
					<input type="text" placeholder="título da notícia" class="form-control" name="titulo" value=<?php echo "'". $titulo . "'"; ?> autofocus />
				<label for="descricao"> Descrição: </label>
					<input type="text" placeholder="descrição da notícia" class="form-control" name="descricao" value=<?php echo "'". $descricao . "'"; ?> />
				<label for="autor"> Autor: </label>
					<input type="text" placeholder="autor da notícia" class="form-control" name="autor" value=<?php echo "'". $autor . "'"; ?> />
				<label for="data"> Data: </label>
					<input type="text" placeholder="data da notícia" class="form-control" name="data" value=<?php echo "'". $data . "'"; ?> />
				<label for="texto"> Texto: </label>
					<textarea class="form-control" name="texto" placeholder="texto da notícia"><?php echo $texto; ?></textarea>

				<input type="submit" name="editar" value="Editar notícia" class="btn btn-default" />	
			</form>		
		</div>	

<?php include 'templates/footer.php' ?>