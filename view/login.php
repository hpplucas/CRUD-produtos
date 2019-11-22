<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style type="text/css">
		#form-login {
			width: 350px;
			margin-top: 100px;
			padding: 30px;
			border: 2px solid #f3f3f3;
			border-radius: 15px;
			-webkit-box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
			-moz-box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
			box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);		}

	</style>

</head>
<body>

	<div class="container" id="form-login">
		<center>
			<img src="../img/login.png" style="width: 100px; height: 100px;">
		</center>
		<form action="../procedimentos/verifica_login.php" method="post">
			<div class="form-group">
				<label>Usuário</label>
				<input type="text" name="user" class="form-control" placeholder="Usuário" required>

			</div>
			<div class="form-group">
				<label>Senha</label>
				<input type="password" name="password" class="form-control" placeholder="Senha" required>

			</div>
			<div style="text-align: right;">
				<button class="btn btn-sm btn-success" type="submit">Acessar</button>
			</div>
		</form>	
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>