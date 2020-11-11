<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            align-content: center;
        }
        table, td, tr{
            border: 1px solid black;
        }
        td{
            padding: 1px 25px;
        }
    </style>
<?php
    $localhost = "localhost";
    $user = "root";
    $senha = "";
    $db = "db_livraria";
    
    $conexao = mysqli_connect($localhost,$user,$senha,$db);

    $consulta = $_GET['tipo_de_busca'];
    $a = "ID";
    $b = "Nome";
    
    if ($consulta == $a) {
        $id = $_GET['item'];
        $sql = "SELECT id, nome, endereco, bairro, cidade, estado, telCel FROM db_clientes WHERE id = '$id'"; 
        $result = mysqli_query($conexao,$sql);
        
        echo "<table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
        </tr>";
        
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['nome']."</td>
            <td>".$row['endereco']."</td>
            <td>".$row['bairro']."</td>
            <td>".$row['cidade']."</td>
            <td>".$row['estado']."</td>
            <td>".$row['telCel']."</td>
            </tr>";
        }
        echo "</table>";
    }
    
    
    if ($consulta == $b) {
        $nome = $_GET['item'];
        //$sql = "SELECT id, nome, endereco, bairro, cidade, estado, telCel FROM db_clientes WHERE Nome = '$nome'"; 
        $sql = "SELECT id, nome, endereco, bairro, cidade, estado, telCel FROM db_clientes WHERE Nome LIKE '%$nome%'"; 
        $result = mysqli_query($conexao,$sql);
        
        echo "<table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
        </tr>";
        
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['nome']."</td>
            <td>".$row['endereco']."</td>
            <td>".$row['bairro']."</td>
            <td>".$row['cidade']."</td>
            <td>".$row['estado']."</td>
            <td>".$row['telCel']."</td>
            </tr>";
        }
        echo "</table>";
    }
    
    
    mysqli_close($conexao);
    ?>
    </body>
    </html>