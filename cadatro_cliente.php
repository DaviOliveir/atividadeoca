<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de clinte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>



  <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro de Cliente</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="cadastro_cliente.php">Cadastro de Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
            </ul>
          </li>
        </ul>
      
      </div>
    </div>
  </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<form action="INSERT.PHP" method="post">
<div class="container" >

   
<div class="row" style="margin-top: 100px;"><form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome Completo</label>
    <input type="text" name= "nome" class="form-control" id="inputEmail4" placeholder="Digite seu nome">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">CPF</label>
    <input type="text" name="cpf" class="form-control" id="CPF" placeholder="000.000.000-00">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Cidade</label>
    <input type="text" name= "cidade" class="form-control" id="inputCity" placeholder="Ex: itanhaem">
  </div>
  <div class="col-5">
    <label for="inputAddress" class="form-label">Rua</label>
    <input type="text" name= "rua" class="form-control" id="inputAddress" placeholder="Rua,Bairro.">
  </div>
  <div class="col-1">
    <label for="inputAddress2" class="form-label">Número</label>
    <input type="number" name= "numero" class="form-control" id="inputAddress2" placeholder="N°">
  </div>
  
  <div class="col-md-1">
  <label for="inputEmail4" class="form-label">Estado</label>
    <input type="text" name= "estado" class="form-control" id="inputEmail4" placeholder="Digite seu nome">
  </div>
    
  </div>
  
  <div class="col-md-3">
    <label for="inputEmail4" class="form-label">CEP</label>
    <input type="text" name= "cep" class="form-control" id="CEP" placeholder="00000-000">
  </div>
  <p></p>

  <div class="col-6">
    <label for="inputAddress2" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputAddress2" placeholder="Ex: davipedro@gmail.com">
  </div>
  

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">senha</label>
    <input type="password" name="senha" class="form-control" id="inputPassword4" placeholder="**********">
  </div>
  
  

 
  
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Número de telefone</label>
    <input type="text" name="numerotel" class="form-control" id="celular" placeholder="(13)09 5874-8762">
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Concordo com os termos
      </label>
    </div>
    
  
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-light">Cadastrar</button>
  </div>
  <div class="row" style="margin-top: 100px;"><form class="row g-3">
    
</form>

<script type="text/javascript">
$("#celular").mask("(00) 00000-0000");
$("#CPF").mask("000.000.000-00");
$("#CEP").mask("00000-000");
</script>
</div>

</div>

    
</body>
</html>