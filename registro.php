<?php
	include 'templates/header.php';
?>
		  	<div class="container">
			<h3> Cadastre-se no site do Beetle Escape </h3>
			<p> O jogador cadastrado no site do Beetle Escape possui acesso a conteúdo extra, informações relevantes e direito a voto. </p>
			
			<?php
				include 'restrito/conexao.php';
				
				if( isset( $_POST['registra'] ) ):
					$usuario = $_POST['usuario']; 
					$nome = $_POST['nome'];
					$email = $_POST['email'];
					$senha = $_POST['senha'];
					$senhaconfirma = $_POST['senhaconfirma'];
					$permissao = 0;
					if ($usuario=='' || $nome=='' || $email=='' || $senha=='' || $senhaconfirma=='') {
						echo "<div class='alert alert-info'> Todos os campos devem ser preenchidos. </div>";
					} else if (!$senha == $senhaconfirma){
						echo "<div class='alert alert-info'> Senha de confirmação diferente da senha. </div>";
					} else {
						$param = $conexao->prepare("INSERT INTO usuarios(usuario, nome,email,senha, permissao) VALUES (?, ?, ?, ?, ?)");
						// criptografa a senha
						$senha = crypt($senha);
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
				<input type="submit" name="registra" value="Registrar usuário" class="btn btn-default" />	
			</form>		
		</div>	

<?php include 'templates/footer.php' ?>