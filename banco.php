<?php


$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'cadastro';

$conexao = mysqli_connect($servidor,$user,$password,$banco);



$nome = $_POST ['ome'];
$email = $_POST ['mail'];
$senha = $_POST ['enha'];
$numerotel = $_POST ['umerotel'];






$sql = "INSERT INTO tb_cadastro(id_cliente,nm_nome, nm_email, nr_senha, nr_telefone) 
values (null,'$nome','$email','$senha','$numerotel')";
$insert = mysqli_query($conexao, $sql);
header('Location: index.php?msg=1');
?>