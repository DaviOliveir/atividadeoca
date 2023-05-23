<?php


$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'cadastro';

$conexao = mysqli_connect($servidor,$user,$password,$banco);

$email = $_POST ['nm_email'];
$senha = $_POST ['nr_senha'];

$sql = "SELECT * from tb_cadastro where login = '$email'";
$seach = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($seach);

$senhaBanco == $array['nr_senha'];

if ($senhaBanco == $senha){
    header('Location: cadatro_cliente2.php');
}else{
    header('Location: index.php?msg=1');
    mysql_close();
}
?>
