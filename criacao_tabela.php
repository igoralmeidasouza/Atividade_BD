<?php 

$localhost = 'localhost';
$user_name = 'root';
$senha = "";
$db = "db_livraria";

$conexao = mysqli_connect($localhost,$user_name, $senha, $db);

$sql = "CREATE TABLE db_clientes(
    ID INT,
    nome VARCHAR(100),
    endereco VARCHAR(100),
    bairro VARCHAR(100),
    cidade VARCHAR(50),
    estado VARCHAR(2),
    telCel VARCHAR(11)
    )";

if (mysqli_query($conexao,$sql)){
    echo "Tabela clientes criada com sucesso!","<br>";

    $sql ="CREATE TABLE db_usuarios(

    codUsu int not null auto_increment,
    nomeUsu varchar(50),
    loginUsu varchar(30) unique,
    senhaUsu varchar(40),
    primary key (codUsu))";
    if (mysqli_query($conexao,$sql)){
        echo "Tabela usuarios criada com sucesso!";
    }
    else{
        echo "erro ao criar tabela usuarios!";
    }
}
else{
    echo "Erro: ".mysqli_error($conexao);
}
mysqli_close($conexao);

?>