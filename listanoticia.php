<?php
	include 'templates/header.php';
	include 'templates/checagestor.php';
?>
			<h3> Lista notícias </h3>
			<table class="table table-striped" width="647">
				<thead>
					<tr>
						<th>Id</th>
						<th>Título</th>
						<th>Autor</th>
						<th>Data</th>
						<th>Editar</th>
						<th>Remover</th>
					</tr>
				</thead>
				<tbody>
				<?php
					include 'restrito/conexao.php';
						$resultado = $conexao->query("SELECT id, titulo, autor, data FROM noticias ORDER BY id");
					while ($linha = $resultado->fetch_assoc()){
						echo '<tr>';
						echo '<td>' . $linha['id'] . '</td>'; // colocar número de repetição
						echo '<td> <a href="noticia.php?id='. $linha['id'].'">' . $linha['titulo'] .'</a> </td>';
						echo '<td>' . $linha['autor'] .'</td>';
						echo '<td>' . $linha['data'] .'</td>';
						echo '<td> <a href="editanoticia.php?id='. $linha['id'].'">Editar</a></td>';
						echo '<td> <a class="removenoticia" href="deletanoticia.php?id='. $linha['id'].'">X</a></td>';
						echo '</tr>';
					}
				?>
				</tbody>
				</table>
		</div>	
<?php include 'templates/footer.php' ?>