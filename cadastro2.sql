create database cadastro;

use cadastro;

create table tb_cadastro(
id_cliente int auto_increment primary key,
nm_nome varchar(45) not null, 
nm_email varchar(45) not null, 
nr_senha varchar(10) not null, 
nr_telefone char(11) not null);