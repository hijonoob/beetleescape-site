<?php include 'templates/header.php' ?>
<!-- //TODO checar login e permissão 3 -->
		  	<div class="container">
			<h3> Lista usuários </h3>
			<?php
			// rascunho, acertar
				$conexao->real_query("SELECT nome FROM usuarios ORDER BY nome ASC");
				$resultado = $mysqli->use_result();

				while ($linha = $resultado->fetch_assoc()) {
					// criar tabela para exibir esses dados
				   echo " Nome: " . $linha['nome'] . "\n";
				   // imprimir nome, id, permissão
				   // colocar botão para editar e remover usuários
				   		// página de deletar deve ser incorporada nessa lista
				   // colocar botão para adicionar usuário abaixo
				}
			?>
				
		</div>	

<?php include 'templates/footer.php' ?>