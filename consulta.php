<?php
    require_once 'conexao.php';

    session_start();

    if(!isset($_SESSION['logado'])){
        header('Location: Login.php');
    }
    $id_usu = $_SESSION['codUsu'];
	$sql = "SELECT * FROM db_usuarios WHERE codUsu = '$id_usu'";
	$resultado = mysqli_query($con, $sql);
	$dados = mysqli_fetch_array($resultado);
	mysqli_close($con);
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro Livraria</title>
    </head>
    <body> 
        <!-- --------------------- CONSULTAR TABELA ----------------------------- -->
    <div class="log">
        <div class="dropdown">
        <button class="dropbtn"><?php echo $dados['nomeUsu']." "; ?>  <i class="arrow down"></i> </button>
            <div class="dropdown-content">
                <form method="POST" action="resposta_consulta.php" >
                    <input value="Logout" type="submit" name="logout">
                </form>
            </div>
        </div>
    </div>
    
    <div class="mestre">

    <div class="container">


    <h1>Consulta</h1> 
    
    <div class="consulta">

    <h3>Consultar tabela</h3>

    <form name="tabela" method="GET" action="resposta_consulta_tabela.php">
        <input type="radio" value ="crescente"name="pesquisa" checked>
        <label for="male">Ordem Crescente</label>

        <input type="radio" value="decrescente" name="pesquisa">
        <label for="female">Ordem Decrescente</label><br>

        <br><input class="button" type="submit" value="consultar">
    </form>
    </div>
<!-- ---------------------- CONSULTAR COLUNA ---------------------------- -->
    <div class="consulta">

    <h3>Consultar coluna em especifico do Banco de Dados </h3>
 
    <form name="cadastro" method="GET" action="resposta_consulta.php">

        <input type="checkbox" name="nome" value="nome"> Nome

        <input type="checkbox" name="endereco" value="on"> Endereço

        <input type="checkbox" name="bairro" value="on"> Bairro

        <input type="checkbox" name="cidade" value="on"> Cidade

        <input type="checkbox" name="estado" value="on"> Estado
        
        <input type="checkbox" name="telCel" value="on"> Telefone

        <br><br><input class="button" type="submit" value="consultar">
    </form>

    </div>

<!-- ---------------------- PROCURAR PELO CLIENTE ------------------------ -->
    <div class="consulta">

    <h3>Procurar pelo cliente</h3>

    <form name="consulta" method="GET" action="resposta_consultar_cliente.php">

    <select name="tipo_de_busca" id="tipo_de_busca">
    <option value="ID" id = "ID">ID</option>
    <option value="Nome">Nome</option>
    </select>
    
    <input type="text" name="item"> 

    <br><br><input class="button" type="submit" value="consultar">

    </form>
    
    </div>

<!-- ----------------------- EXCLUIR CADASTRO ------------------------------ -->

    <div class="consulta">

    <h3>Excluir cadastro</h3>

    <form name="excluir" method="GET" action="resposta_exclusao.php">
        <b>ID: </b> 
        <input type="number" name="excluir" style="width: 50px;">

        <br><br><input class="button" type="submit" value="Excluir">
    </form>
    
    </div>

<!-- ----------------------- ALTERAR CADASTRO --------------------------- -->
    <div class="consulta">

    <h3>Alterar cadastro</h3>

    <form name="consulta" method="GET" action="resposta_alterar_cadastro.php">

    <b>ID: </b>
    <input type="number" name="id" style="width: 50px;">

    <select name="alterar" style="margin-left: 25px;">
    <option value="nome">Nome</option>
    <option value="endereco">Endereço</option>
    <option value="bairro">Bairro</option>
    <option value="cidade">Cidade</option>
    <option value="estado">Estado</option>
    <option value="telCel">Telefone</option>
    </select>
    
    <input type="text" name="editar" style="width: 300px;"> 

    <br><br><input class="button" type="submit" value="Alterar">

    </form>
</div>
<!-- ----------------------- IR PARA CADASTRO CLIENTES / USUARIOS --------------------------- -->
    <a href="cadastro_clientes.php"> <button class="button4"> Cadastro Cliente</button></a>
    <a href="cadastro_usuarios.php"> <button class="button4"> Cadastro Usuario</button></a>
    </div> 
    </div>
</body>
</html>