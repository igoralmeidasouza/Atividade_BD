<?php
    $localhost = "localhost";
    $user = "root";
    $senha = "";
    $db = "db_livraria";

    $conexao = mysqli_connect($localhost,$user,$senha,$db);

// Utilizando "echo" eu fiz uma DIV individual para organizar melhor o resultado da consulta.

    echo "<div class='con_tabela' style='display:flex;justify-content: space-arround;'>";

//------------------------------------------------------------------------------------//
// Na consulta sempre irá mostrar o ID contido no banco de dados.

    $sql = "SELECT ID FROM db_clientes";
        echo "<div class='container_ID' style='padding-right: 30px;'>";
        $consulta = mysqli_query($conexao,$sql);

        echo "<b>Id</b>"."<br>";
        while($clientes_array = mysqli_fetch_array($consulta)){
            echo $clientes_array['ID']."<br>";
        }
        echo "</div>";

//------------------------------------------------------------------------------------//
// CheckBox: Se estiver setado dará o resultado.

    if (isset($_GET['nome'])){
        echo "<div class='container_nome' style='padding-right: 30px;'>";

        $sql = "SELECT nome FROM db_clientes";
        $consulta = mysqli_query($conexao,$sql);

        echo "<b>Nome</b>"."<br>";
        while($clientes_array = mysqli_fetch_array($consulta)){
            echo $clientes_array['nome']."<br>";
        }
        echo "<br>";
        echo "</div>";
    }

    if (isset($_GET['endereco'])){
        echo "<div class='container_endereco' style='padding-right: 30px;'>";

        $sql = "SELECT endereco FROM db_clientes";
        $consulta = mysqli_query($conexao,$sql);

        echo "<b>Endereco</b>"."<br>";
        while($clientes_array = mysqli_fetch_array($consulta)){
            echo $clientes_array['endereco']."<br>";
        }
        echo "<br>";
        echo "</div>";
    }

    if (isset($_GET['bairro'])){
        echo "<div class='container_bairro' style='padding-right: 30px;'>";

        $sql = "SELECT bairro FROM db_clientes";
        $consulta = mysqli_query($conexao,$sql);

        echo "<b>Bairro</b>"."<br>";
        while($clientes_array = mysqli_fetch_array($consulta)){
            echo $clientes_array['bairro']."<br>";
        }
        echo "<br>";
        echo "</div>";
    }

    if (isset($_GET['cidade'])){
        echo "<div class='container_cidade' style='padding-right: 30px;'>";

        $sql = "SELECT cidade FROM db_clientes";
        $consulta = mysqli_query($conexao,$sql);

        echo "<b>Cidade</b>"."<br>";
        while($clientes_array = mysqli_fetch_array($consulta)){
            echo $clientes_array['cidade']."<br>";
        }
        echo "<br>";
        echo "</div>";
    }
    
    if (isset($_GET['estado'])){
        echo "<div class='container_estado' style='padding-right: 30px;'>";

        $sql = "SELECT estado FROM db_clientes";
        $consulta = mysqli_query($conexao,$sql);

        echo "<b>Estado</b>"."<br>";
        while($clientes_array = mysqli_fetch_array($consulta)){
            echo $clientes_array['estado']."<br>";
        }
        echo "<br>";
        echo "</div>";
    }       


    
    if (isset($_GET['telCel'])){
        echo "<div class='container_telCel' style='padding-right: 30px;'>";

        $sql = "SELECT telCel FROM db_clientes";
        $consulta = mysqli_query($conexao,$sql);

        echo "<b>Telefone</b>"."<br>";
        while($clientes_array = mysqli_fetch_array($consulta)){
            echo $clientes_array['telCel']."<br>";
        }
        echo "</div>";
    }
    if (isset($_POST['logout'])){
    
    //abrir a sessão
	session_start();
	//limpar a sessão
	session_unset();
	//destruir a sessão
	session_destroy();

	//Enviando o usuário para o index.php
	header('Location: login.php');
    }

    mysqli_close($conexao);
?>