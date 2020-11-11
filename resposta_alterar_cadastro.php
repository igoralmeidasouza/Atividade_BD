<?php
    
    $localhost = 'localhost';
    $user_name = 'root';
    $senha = "";
    $db = "db_livraria";

    $conexao = mysqli_connect($localhost,$user_name,$senha,$db);

    $id = $_GET['id']; // ID do cliente.
    $alterar = $_GET['alterar']; // Qual coluna vai ser alterada. (ex: nome ou endereco ou cidade ...)
    $editar = $_GET['editar']; // Novo dado inserido.
    
    
    if (isset($_GET['alterar'])) {

        $consulta = "SELECT id FROM db_clientes WHERE id = '$id'";
        $resposta = mysqli_query($conexao,$consulta);  
        
        $row = mysqli_fetch_assoc($resposta);
        
        if($row == ""){
            echo "ID não encontrado";
        }
        else{
            $sql = "UPDATE db_clientes SET $alterar = '$editar' WHERE id = '$id'";
            if (mysqli_query($conexao,$sql)){
                echo "atualizado com sucesso.";
            }
            else{
                echo "Falha ao atualizar o cadastro";
            }
        }
    }
    mysqli_close($conexao);
?>