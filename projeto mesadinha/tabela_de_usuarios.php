<?php
header("Content-type:text/html; charset=utf8");
require_once "classes/Alunos.php";
$alunos = new Alunos();
$lista_alunos = $alunos->listartodos();
if (isset($_GET["codigo"])){
    $alunos->excluir($_GET["codigo"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alunos</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha
    384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container lista">
    <div class="row">
        <div class="col-lg-10"></div>

    </div>
    <div class="row">
        <div class="col-lg-12">

            <table class="table">
                <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Email</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                </tr>
                </thead>

                <?php if ($lista_alunos) :
                    foreach ($lista_alunos as $aluno) :?>
                        <tr>
                            <td><?php echo $aluno->codigo; ?></td>
                            <td><?php echo $aluno->nome; ?></td>
                            <td><?php echo $aluno->sexo; ?></td>
                            <td><?php echo $aluno->email; ?></td>
                            <td><?php echo $aluno->endereco; ?></td>
                            <td><?php echo $aluno->telefone; ?></td>
                            <td>
                                <a href="Alterar.php?codigo=<?php echo $aluno->codigo;?>" class="btn btn-outline-success "><i class="fa fa-edit"></i> </a>
                                <a href="tabela_de_usuarios.php?codigo=<?php echo $aluno->codigo;?>" class="btn btn-outline-danger "><i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7">Nenhum usuario cadastrado</td>
                    </tr>
                <?php endif;?>
                </tbody>
            </table>
            <div class="alignment">
                <a href="CadastroUsuarios.php" class="aa btn">Novo</a>
            </div>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>