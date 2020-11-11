<?php

$localhost = "localhost";
$user = "root";
$senha = "";
$db = "db_livraria";
$id = 1;

$conexao = mysqli_connect($localhost,$user,$senha,$db);

if(mysqli_connect_errno($conexao)){
    echo "Erro ao tentar se conectar com o banco de dados! Erro: ".mysqli_connect_error();
}

else{
    // A inserção do ID (identificação) é automatica. 
    // É feito uma consulta no ultimo item lançado banco de dados na coluna "ID" e partir dele é adicionado +1 ao valor.
    // Em caso de consulta e não houver item no BD, a variavel $id = 1 como declarado a cima.

    $sql = "SELECT ID FROM db_clientes ORDER BY id DESC LIMIT 1";
        $consulta = mysqli_query($conexao,$sql);

        while($clientes_array = mysqli_fetch_array($consulta)){
            $identifica = $clientes_array['ID'];
            $id = $identifica + 1;
        }
    

    $sql = "INSERT INTO db_clientes VALUES(
            $id,
            '$_POST[nome]',
            '$_POST[endereco]',
            '$_POST[bairro]',
            '$_POST[cidade]',
            '$_POST[estado]',
            '$_POST[telcel]'
            )";


    if(mysqli_query($conexao,$sql)){
        echo "Cliente cadastrado com sucesso!";
    }
    else{
        echo "Erro ao inserir cliente! Erro: ".mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>