<?PHP

# Conexão com o banco de dados MySQL *********************
$servidor ="localhost";
$usuario ="root";
$senha = "";
$database = "aula";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database)

# Criando tabelas usando php *************
# Tabel cursos(nome do curso, carga horaria)
$query= "CREATE TABLE CURSOS(
	id_curso int not null auto_increment,
	nome_curso varchar(255) not null,
	carga_horaria int not null,
	primary key(id_curso)
)";

$executar = mysqli_query($conexao, $query);
if(executar){
	echo"Executado com sucesso (cursos)";
}
else{
	echo"Falha ao executar (cursos)";
}

# Tabela alunos(nome do aluno, data de nascimento)
$query= "CREATE TABLE ALUNOS(
	id_aluno int not null auto_increment,
	nome_aluno varchar(255) not null,
	data_nascimento varchar(255) not null,
	primary key(id_aluno)
)";

$executar= mysqli_query($conexao, $quey);
if(executar){
	echo "Executado com sucesso (alunos)";
}
else{
	echo "Falha ao executar (alunos)";
}


#Tabela alunos_cursos (aluno, curso)
$query = "CREATE TABLE alunos_cursos(
	id_aluno_curso int not null auto_increment,
	id_aluno int not null,
	id_curso int not null,
	primary key(id_aluno_curso)
)";

$executar = mysqli_query($conexao, $query);
if(executar){
	echo "Executado com seucesso (alunos_cursos)";
}
else{
	echo "Falha ao executar (alunos_cursos)";
}


#Inserir dados nas tabelas ******************
$query= "INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES('João','02-06-2002')";