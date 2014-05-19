<?php include 'templates/header.php' ?>
<!-- //TODO checar login e permissão 3 -->
		  	<div class="container">
			<h3> Editar usuário </h3>
			
			<?php
				include 'restrito/conexao.php';
				$usuario = htmlspecialchars($_GET["user"]);
				if($usuario){
					if ($sql = $conexao->prepare("SELECT nome, usuario, email, permissao FROM usuarios WHERE usuario = ?")) {
						$sql->bind_param('s', $usuario);
						$sql->execute();
						$sql->bind_result($nome, $usuario, $email, $permissao);
						$sql->fetch();
						if ($nome == ''){
							echo "<div class='alert alert-info'> Usuário não encontrado </div>";
						} else {
							echo "<div class='alert alert-info'> Usuário encontrado: ". $nome . "</div>";
						}
						$sql->close();
					}
				}

				
				if( isset( $_POST['editar'] ) ):
					$usuario = $_POST['usuario'];
					$usuarioAntigo = $_POST['usuario']; 
					$nome = $_POST['nome'];
					$email = $_POST['email'];
					$permissao = $_POST['permissao'];
					
					if ($usuario=='' || $nome=='' || $email=='' || $permissao=='') {
						echo "<div class='alert alert-info'> Todos os campos devem ser preenchidos. </div>";
					} else {
						if (!is_numeric ($permissao) || $permissao > 3 || $permissao < 0){
							$permissao=0;
						}
						$param = $conexao->prepare("UPDATE usuarios SET usuario = ?, nome = ?,email = ?, permissao=? WHERE usuario = ?");
						$param->bind_param('sssis', $usuario, $nome, $email, $permissao, $usuarioAntigo);
						if ($param->execute()) {
							echo "<div class='alert alert-info'> Alteração efetuada com sucesso. </div>";
							$param->close();
						}
					}
				endif;
			?>
			
			
			<form action="" method="POST">
				<label> Usuário: </label>
					<input type="text" placeholder="usuário" class="form-control" name="usuario" value=<?php echo "'". $usuario . "'"; ?> />
				<label> Nome: </label>
					<input type="text" placeholder="nome completo" class="form-control" name="nome" value=<?php echo "'". $nome . "'"; ?>/>
				<label> E-mail: </label>
				<input type="text" placeholder="e-mail" class="form-control" name="email" value=<?php echo "'". $email . "'"; ?>/>
				<label> Permissão: </label>
					<input type="text" placeholder="permissão" class="form-control" name="permissao" value=<?php echo "'". $permissao . "'"; ?> />
				<input type="submit" name="editar" value="Editar usuário" class="btn btn-default" />	
			</form>		
		</div>	

<?php include 'templates/footer.php' ?>