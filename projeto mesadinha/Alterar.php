<?php
header("Content-type:text/html; charset=utf8");
require_once "classes/Alunos.php";
$alunos = new Alunos();

if (isset($_GET["codigo"])){
    $dadosdoaluno = $alunos->listarID($_GET["codigo"]);
}
if (isset($_POST["Salvar"])){
    $alunos->alterar();
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
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<div class="main">
    <div class="div1">
        <form action="Alterar.php?codigo=<?php echo $dadosdoaluno->codigo;?>" method="post">
            <p>Nome:</p>
            <input type="text" name="nome" id="nome" value="<?php echo $dadosdoaluno->nome; ?>" required><br><br>
            <p>Sexo:</p>
            <select name="sexo" id="sexo" required>
                <option value="">Escolha uma opção</option>
                <option value="Masculino"<?php if ($dadosdoaluno->sexo == "Masculino") {echo "selected";}?>>Masculino</option>
                <option value="Feminino"<?php if ($dadosdoaluno->sexo == "Feminino") {echo "selected";}?>>Feminino</option>
                <option value="Outros"<?php if ($dadosdoaluno->sexo == "Outros") {echo "selected";}?>>Outros</option>
            </select><br><br>
            <p>Email:</p>
            <input type="email" name="email" id="email" required value="<?php echo $dadosdoaluno->email; ?>"><br><br>
            <p>Endereço:</p>
            <input type="text" name="endereco" id="endereco" required value="<?php echo $dadosdoaluno->endereco; ?>"><br><br>
            <p>Telefone:</p>
            <input type="text" name="telefone" id="telefone" required value="<?php echo $dadosdoaluno->telefone; ?>"><br><br>
            <p>Senha:</p>
            <input type="password" name="senha" id="senha" required value="<?php echo $dadosdoaluno->senha; ?>"><br><br>
            <center>
                <button class="btn btn-outline-success" type="submit" name="Salvar" id="salvar">Salvar</button>
                <a href="index.html" class="btn btn-outline-success" name="voltar" id="voltar">Voltar</a>
            </center>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>