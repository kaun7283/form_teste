<?php

if(isset($_POST['submit'])) {

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexualidade = $_POST['sexualidade'];
    $data_nasc = $_POST['data_nasc'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexualidade,data_nasc)
    VALUES ('$nome', '$email', '$telefone', '$sexualidade', '$data_nasc')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>INSIRA SEUS DADOS</h1>

    <form action="formulario.php" method="POST">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="telefone">telefone:</label>
        <input type="tel" id="telefone" name="telefone"><br><br>

        <label for="sexualidade">selecione sua sexualidade:</label>
        <select id="sexualidade" name="sexualidade">
            <option value="" selected disabled>Selecione uma opção</option>
            <option value="heterossexual">Heterossexual</option>
            <option value="homossexual">Homossexual</option>
            <option value="bissexual">Bissexual</option>
            <option value="pansexual">Pansexual</option>
            <option value="assexual">Assexual</option>
            <option value="nao-informada">Prefiro não informar</option>
            <option value="outra">Outra</option>
        </select> <br><br>

        <label for="data_nasc">data de nascimento:</label>
        <input type="date" id="data_nasc" name="data_nasc"><br><br>

        <input type="submit" name= "submit" value="Enviar">




    </form>
</body>
</html>
