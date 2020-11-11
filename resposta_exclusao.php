<?php
    $localhost = "localhost";
    $user = "root";
    $senha = "";
    $db = "db_livraria";
    
    $conexao = mysqli_connect($localhost,$user,$senha,$db);

    if(isset($_GET['excluir'])){
        $excluir = $_GET['excluir'];
        
        $consulta = "SELECT id FROM db_clientes WHERE id = '$excluir'";
        $resposta = mysqli_query($conexao,$consulta);  
        
        $row = mysqli_fetch_assoc($resposta);
        
        if($row == ""){
            echo "ID não encontrado";
        }
        else{    
            $sql = "DELETE FROM `db_clientes` WHERE id ='$excluir'";
            $result = mysqli_query($conexao,$sql);
            echo "Excluido com sucesso!!!";
        }
    }
    mysqli_close($conexao);
?>