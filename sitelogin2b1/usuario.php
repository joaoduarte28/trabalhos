<?php
header("Content-type:text/html; charset=utf8");
//var_dump($_POST);
//variaveis
$nome = "";
$email = "";
$senha = "";
$endereco = "";
$perfil = "";

// logica

if(isset($_POST["salvar"])){ // tela de cadastro de usuario
    if(isset($_POST["nome"]) && !empty($_POST["nome"])
    && isset($_POST["email"]) && !empty($_POST["email"])
    && isset($_POST["senha"]) && !empty($_POST["senha"])
    && isset($_POST["endereco"]) && !empty($_POST["endereco"])
    && isset($_POST["perfil"]) && !empty($_POST["perfil"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $endereco = $_POST["endereco"];
        $perfil = $_POST["perfil"];

        //header("location: index.html");
        //echo "Usuário cadastrado com sucesso!";
        // exibir mensagem para usuario com javascript
        echo "<script>
                alert('Usuário cadastrado com sucesso!!'); // exibir mensagem ao usuario
                window.location.href = 'index.html'; // redirecionar para a pagina de login
                
             </script>";

    }else{ // usuario nao preencheu todos campos no cadastro
        header("location:cadastrousuario.html");
    }
}else if(isset($_POST["entrar"])){ // tela de login do usuario
//Atividade para casa, fazer a função de validar o e-mail e senha do sitelogin em anexo.
    $usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']);
session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    
    header('location:index.php');{
}
else{
    header('location:index.php?erro');
}
   echo "tela de login";
}else{ // usuario tentou burlar o sistema, não preencheu nenhum formulario
   header("location:index.html");
}

?>