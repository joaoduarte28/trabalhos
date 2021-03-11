create database mesadinha;
use mesadinha;

create table cadastro(
codigo int unsigned not null auto_increment primary key,
nome varchar(50) not null,
sexo varchar(20) not null,
email varchar(80) not null,
endereco varchar(200) not null,
telefone char(15) not null,
senha char(20) not null
)engine=innodb;

create table categorias(
codigo int unsigned not null auto_increment primary key,
nome varchar (50) not null
)engine=innodb;

select * from cadastro;

