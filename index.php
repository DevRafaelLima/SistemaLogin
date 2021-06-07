<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sistema de login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style type="text/css">
		.container {
			display: flex;
		}
		form {
			max-width: 500px;
		}
	</style>
</head>
<body>
	
	<div class="container justify-content-center">
		
		<form method="post" action="validaLogin.php">
			<?php if(isset($_GET['acao']) && $_GET['acao'] == 1) {?>
			<div class="alert alert-warning">
				Preencha todos os campos
			</div>
			<?php } else if (isset($_GET['acao']) && $_GET['acao'] == 2){?>
			<div class="alert alert-warning">
				Email não está cadastrado.
			</div>	
			<?php } else if(isset($_GET['acao']) && $_GET['acao'] == 3) {?>
			<div class="alert alert-warning">
				Senha inválida
			</div>
			<?php } ?>
			<div class="form-group">
				<label for="email">Email: </label>
				<input type="email" name="email" id="email" class="form-control">
			</div>

			<div class="form-group">
				<label for="senha">Senha: </label>
				<input type="password" name="senha" id="senha" class="form-control">
			</div>

			<input type="submit" value="logar" class="btn btn-primary">

		</form>
	</div>
</body>
</html>