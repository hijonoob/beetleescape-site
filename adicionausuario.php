<?php include 'templates/header.php' ?>
<!-- //TODO checar login e permissão 3 -->
		  	<div class="container">
			<h3> Criar novo usuário </h3>
			
			<?php
				include 'restrito/conexao.php';
				
				if( isset( $_POST['criar'] ) ):
					$usuario = $_POST['usuario']; 
					$nome = $_POST['nome'];
					$email = $_POST['email'];
					$senha = $_POST['senha'];
					$permissao = $_POST['permissao'];
					
					// validar os dados
					// inserir usuário no banco
					echo "<div class='alert alert-info'> Inclusão efetuada com sucesso. </div>";
				
				endif;
			?>
			
			
			<form action="" method="POST">
				<label> Usuário: </label>
					<input type="text" placeholder="usuário" class="form-control" name="usuario" />
				<label> Nome: </label>
					<input type="text" placeholder="nome completo" class="form-control" name="nome" />
				<label> E-mail: </label>
				<input type="text" placeholder="e-mail" class="form-control" name="email" />
				<label> Senha: </label>
					<input type="password" placeholder="senha" class="form-control" name="senha" />
				<label> Confirmar senha: </label>
					<input type="password" placeholder="repetir senha" class="form-control" name="senhaconfirma" />
				<label> Permissão: </label>
					<input type="text" placeholder="permissão" class="form-control" name="permissao" />
				<input type="submit" name="criar" value="Criar novo usuário" class="btn btn-default" />	
			</form>		
		</div>	

<?php include 'templates/footer.php' ?>