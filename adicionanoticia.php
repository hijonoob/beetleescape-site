<?php
	include 'templates/checagestor.php';
	include 'templates/header.php';
?>
			<h3> Criar nova notícia </h3>
			
			<?php
				include 'restrito/conexao.php';
				if( isset( $_POST['criar'] ) ):
					$titulo = $_POST['titulo'];
					$descricao = $_POST['descricao'];
					$autor = $_POST['autor'];
					$data = $_POST['data'];
					$texto = $_POST['texto'];
					
					if ($titulo=='' || $descricao=='' || $autor=='' || $data=='' || $texto=='') {
						echo "<div class='alert alert-warning'> Todos os campos devem ser preenchidos. </div>";
					} else {
						$param = $conexao->prepare("INSERT INTO noticias(titulo, descricao, autor, data, texto) VALUES (?, ?, ?, ?, ?)");
						$param->bind_param('sssss', $titulo, $descricao, $autor, $data, $texto);
						if ($param->execute()) {
							echo "<div class='alert alert-success'> Inclusão efetuada com sucesso. </div>";
							$param->close();
						}
					}
				endif;
			?>
			
			
			<form action="" method="POST" id="adicionanoticia">
				<label for="titulo"> Título: </label>
					<input type="text" placeholder="título da notícia" class="form-control" name="titulo" autofocus />
				<label for="descricao"> Descrição: </label>
					<input type="text" placeholder="descrição da notícia" class="form-control" name="descricao" />
				<label for="autor"> Autor: </label>
					<input type="text" placeholder="autor da notícia" class="form-control" name="autor" />
				<label for="data"> Data: </label>
					<input type="text" placeholder="data da notícia" class="form-control" name="data" <?php date_default_timezone_set('brazil/east'); echo 'value="' . date('d/m/Y', time()) . '"'; ?> />
				<label for="texto"> Texto: </label>
					<textarea class="form-control" name="texto" placeholder="texto da notícia"></textarea>

				<input type="submit" name="criar" value="Criar notícia" class="btn btn-default" />	
			</form>		
		</div>	

<?php include 'templates/footer.php' ?>