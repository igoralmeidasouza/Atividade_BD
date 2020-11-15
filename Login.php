<?php 

	require_once 'conexao.php';

	session_start();

	if (isset($_POST['btnEntrar'])) {
		
		$erros = array();

		$login = mysqli_escape_string($con,$_POST['login']);
		$senha = mysqli_escape_string($con,$_POST['senha']);

		if (empty($login) or empty($senha)) {
			$erros[] = "<li>O campo login ou senha precisa ser preenchido.</li></br>";
		}
		else{

			$sql = "SELECT loginUsu FROM db_usuarios WHERE loginUsu = '$login'";

			$resultado = mysqli_query($con,$sql);

			if (mysqli_num_rows($resultado) > 0 ) {

				$sql = "SELECT * FROM db_usuarios WHERE loginUsu = '$login' AND senhaUsu = '$senha'";

				$resultado = mysqli_query($con,$sql);

				if (mysqli_num_rows($resultado) == 1) {
			
					$dados = mysqli_fetch_array($resultado);

					mysqli_close($con);
					
					$_SESSION['logado'] = true;

					$_SESSION['codUsu'] = $dados['codUsu'];
					
					header('Location: consulta.php');
					
					
				}else{
					
					$erros[] = "<li>Usuário e senha não conferem.</li></br>";
				}
				
			}else{

				$erros[] = "<li>Usuário inexistente.</li></br>";
			}
		}		
	}
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Sistema de Login</title>
</head>
<body>
	<div class="mestre">
	<div class="card2">
	<div class="header"><h2>Sistema de Login</h2> </div>

	<div class="formulario-card">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

	<p class="form2">Login</p>
	<input class="form-campo" type="text" name="login" > <br>
	
	<p class="form2">Senha</p>
	<input class="form-campo" type="password" name="senha" ><br>
	
	<?php 
		if(!empty($erros)) {
			foreach ($erros as $erro) {
				echo $erro;
			}
		}
		
	?>
	
	<button type="submit" name="btnEntrar" class="button5">Entrar</button>

	</form>
	</div>
	</div>
	</div>
</body>
</html>