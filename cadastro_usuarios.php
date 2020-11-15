<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<div class="mestre">

	<div class="card2">
	<div class="header"><h2>Cadastro de Usuários</h2> </div>

	<div class="formulario-card">
	<form name="cadastrar1" action="resposta_cadastro.php" method="POST">

		<p class="form2">Nome</p>
		<input class="form-campo" type="text" name="nome" > <br>

		<p class="form2">Login</p>
		<input class="form-campo" type="text" name="login" ><br>
		
		<p class="form2">Senha</p>
		<input class="form-campo" type="password" name="senha" ><br>
		
        <br><br><input type="submit" value="Cadastrar" class="button2" name="cadastrar1"> 
        
    </form>
    <a href="consulta.php"> <button class="button3"> Voltar</button> </a>

	</div>
	</div>
	</div>

</body>
</html>