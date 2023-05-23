create database sistema;

use sistema;

create table tb_cliente(
cd_cliente int auto_increment primary key  ,
nm_cliente varchar (45) not null,
nr_cpf varchar(20) not null ,
nm_cidade varchar (45) not null,
nm_rua varchar (45) not null,
nr_casa varchar(8) ,
nr_cep char(8) not null,
nm_email varchar(45) not null,
nr_senha varchar(30) not null,
nr_telefone varchar(13),
nm_estado char(2) not null );

select * from tb_cliente;

