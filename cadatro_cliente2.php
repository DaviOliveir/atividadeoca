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

<form action="banco.php" method="post">
<div class="container" >

   
<div class="row" style="margin-top: 100px;"><form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome Completo</label>
    <input type="text" name= "ome" class="form-control" id="inputEmail4" placeholder="Digite seu nome">
  </div>
  

  <div class="col-6">
    <label for="inputAddress2" class="form-label">Email</label>
    <input type="email" name="mail" class="form-control" id="inputAddress2" placeholder="Ex: davipedro@gmail.com">
  </div>
  

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">senha</label>
    <input type="password" name="enha" class="form-control" id="inputPassword4" placeholder="**********">
  </div>
  
  

 
  
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Número de telefone</label>
    <input type="text" name="umerotel" class="form-control" id="celular" placeholder="(13)09 5874-8762">
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

</script>
</div>

</div>

    
</body>
</html>