    <?php


    $servidor = 'localhost';
    $user = 'root';
    $password = 'root';
    $banco = 'sistema';

    $conexao = mysqli_connect($servidor,$user,$password,$banco);



    $nome = $_POST ['nome'];
    $cpf = $_POST ['cpf'];
    $cidade = $_POST ['cidade'];
    $rua = $_POST ['rua'];
    $numero = $_POST ['numero'];
    $cep = $_POST ['cep'];
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];
    $numerotel = $_POST ['numerotel'];
    $estado = $_POST ['estado'];

    
   
  

    $sql = "INSERT INTO tb_cliente(cd_cliente,nm_cliente, nr_cpf , nm_cidade, nm_rua, nr_casa, nr_cep, nm_email, nr_senha, nr_telefone, nm_estado) 
    values (null,'$nome','$cpf','$cidade','$rua','$numero','$cep','$email','$senha','$numerotel', '$estado')";
    $insert = mysqli_query($conexao, $sql);

   
    ?>

   