<?php 

$localhost = 'localhost';
$user_name = 'root';
$senha = "";

$conexao = mysqli_connect($localhost,$user_name,$senha);

    if (mysqli_connect_errno($conexao)){
        echo "</br>Erro ao conectar com a base de dados! erro:".mysqli_connect_errno();
    }
    else{
        $sql="CREATE DATABASE db_livraria";
        if (mysqli_query($conexao,$sql)){
            echo "</br>Base de Dados criada com sucesso!";
        }
        else{
            echo "</br>Erro na criação do banco de dados!  Erro: ".mysqli_error($conexao);
        }
    }
    mysqli_close($conexao);

?>