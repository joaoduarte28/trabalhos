<?php
header("Content-type:text/html; charset=utf8");
require_once "classes/Alunos.php";

$alunos = new Alunos();

if (isset($_POST["salvar"])) {
    $alunos->inserir();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha
    384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">

</head>
<body>
<div class="div_flex">
    <form action="CadastroUsuarios.php" method="post" class="form form-group">
        <p>Nome:</p>
        <input type="text" name="nome" id="nome" required>
        <p>Sexo:</p>
        <select name="sexo" id="sexo" required>
            <option value="">Escolha uma opção</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
            <option value="O">Outro</option>
        </select>
        <p class="input">Email:</p>
        <input type="email" name="email" id="email" required>
        <p class="input">Endereço:</p>
        <input type="text" name="endereco" id="endereco" required>
        <p class="input">Telefone:</p>
        <input type="text" name="telefone" id="telefone" required>
        <p class="input">Senha:</p>
        <input type="password" name="senha" id="senha" required>
        <div>
            <button class="btn btn-outline-success" name="salvar" id="entrar" type="submit">Cadastrar</button>
            <a href="tabela_de_usuarios.php" class="btn btn-outline-danger" name="voltar" id="voltar">Voltar</a>
        </div>
    </form>


</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>