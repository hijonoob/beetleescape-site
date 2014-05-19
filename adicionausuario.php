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
					$senhaconfirma = $_POST['senhaconfirma'];
					$permissao = $_POST['permissao'];
					
					if ($usuario=='' || $nome=='' || $email=='' || $senha=='' || $senhaconfirma=='' || $permissao=='') {
						echo "<div class='alert alert-info'> Todos os campos devem ser preenchidos. </div>";
					} else if (!$senha == $senhaconfirma){
						echo "<div class='alert alert-info'> Senha de confirmação diferente da senha. </div>";
					} else {
						if (!is_numeric ($permissao) || $permissao > 3 || $permissao < 0){
							$permissao=0;
						}

						$param = $conexao->prepare("INSERT INTO usuarios(usuario, nome,email,senha,permissao) VALUES (?, ?, ?, ?, ?)");
						$param->bind_param('ssssi', $usuario, $nome, $email, $senha, $permissao);
						if ($param->execute()) {
							echo "<div class='alert alert-info'> Inclusão efetuada com sucesso. </div>";
							$param->close();
						}
					}
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