<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Livraria</title>
</head>
<body>
    <div class="mestre">

    <div class="card">
    <div class="header"><h2>Cadastro de Clientes</h2> </div>
    
    <div class="formulario-card">
    <form name="cadastro" method="POST" action="resposta_cadastro.php" >
        <p class="form2">Nome</p>
        <input type="text" name="nome"class="form-campo">

        <p class="form2">Endereço</p>
        <input type="text" name="endereco"class="form-campo">

        <p class="form2">Bairro</p>
        <input type="text" name="bairro"class="form-campo">

        <p class="form2">Cidade</p>
        <input type="text" name="cidade" class="form-campo">

        <p  class="form2">Estado</p>
        <select id="estado" name="estado">
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
        </select>

        <p class="form2">Telefone</p>
        <input type="text" name="telcel" class="form-campo">
        <!--// Código agora é gerado automaticamente
        <p>Codigo</p> 
        <input type="text" name="codigo">-->

        <br><br><input type="submit" value="Cadastrar" class="button2" name="cadastro"> 
        
    </form>
    <a href="consulta.php"> <button class="button3"> Voltar</button> </a>
    </div>

    </div>
    </div>
</body>
</html>