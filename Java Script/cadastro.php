<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
<h3>Cadastro de Usuário</h3>
<<form action="usuarios.php" method="POST">
            <label for="nomeCadastro">Nome</label>
            <input type="text" name="nomeCadastro" id="nomeCadastro" placeholder="Nome" required>
            <label for="telefone">Telefone</label>
            <input type="telefone" name="telefone" id="telefone" placeholder="(31) XXXXX-XXXX" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Ex: joao@gmai.com" required>
            <label for="endereco">Endereço com cep</label>
            <input type="text" name="endereco" id="endereco" placeholder="Ex: rua das oliveiras 20450-130 " required>
            <label for="cpf">CPF</label>
            <input type="cpf" name="cpf" id="cpf" placeholder="Ex: xx.xxx.xxx-xx" required>
            <button type="completar" name="completar" id="completar" value="completar">Completar cadastro</button>
</form>
</body>
</html>