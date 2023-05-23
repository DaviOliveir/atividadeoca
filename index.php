<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div>
<img class="img" src="db8f35f34d13f55d811a00af38495b3d.jpg" alt="">

    </div>
    <?php
    if(isset($_GET['msg'])){?>
        <div class="alert alert-success" role= "alert">Cadastro susseful</div>
    <?php } 
    ?>

<form action="loggon.php" method="post">
        <label class="llogin" for="Login">Login</label>
            <input class="ilogin" type="text" name="Login" id="Login">
        <label class="lsenha" for="senha">senha</label>
            <input class="isenha" type="password" name="senha" id="senha">
            <input class="en" type="submit" value="Logar">
            <a href="cadatro_cliente2.php" class="icas">Cadastrar</a>
    </form>

    
    
</body>
</html>