<!DOCTYPE html>
<html>
<head>
<title>Cadastro de Colaborador</title>
<link rel = "shortcut icon" type = "imagem/x-icon" href = "imagens\logo.png"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" type="text/css" href="cadastro.css"/>
</head>

<body>
  <div class="jumbotron text-center" style="margin: 0%; padding: 0%;">
   <div class="w3-content w3-section" style="max-width: 100%;">
    <img class="mySlides" src="imagens/img2.jpg">
    <img class="mySlides" src="imagens/img5.jpg">
    <img class="mySlides" src="imagens/img1.jpg">
    <img class="mySlides" src="imagens/img3.jpg">
  </div>
</div>

  <script>
  var myIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 5 seconds
  }
  </script>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="padding: 0%;">
  <a class="navbar-brand" href="#" style="padding-left: 2%; padding-right: 2%; border-right: 1px solid green; text-align: center;">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="" href="cadastro.php">Cadastrar Colaborador</a>
      </li>
      <li class="nav-item">
        <a class="" href="#">Atualizar Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="" href="gerador.php">Gerador de Script</a>
      </li>
      <li class="nav-item">
        <a class="" href="#">Remover Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="" href="#">PO's</a>
      </li>
      <li class="nav-item">
        <a class="" href="#">Gráficos de Desempenho</a>
      </li>
      <li class="nav-item">
        <a class="" href="sair.php">Sair</a>
      </li>
      <li class="nav-item">
        <a class="active"  vhref="sobre.php">Sobre</a>
      </li>            
    </ul>
  </div>  
</nav>
  <img src="imagens\linha.jpg" style="width: 100%; float: left;">


  <div class="header">
    <form>
      <h2 align="center" class="form-signin-heading"> SOBRE O SISTEMA</h2><br><br>
      
      <p> Sistema desenvolvido para a empresa Freitas Auto Peças no intuíto de automatizar e facilitar o trabalho dos funcionários da empresa gerando produtividade e ganho de tempo, aumentando a satisfação do cliente em relação ao atendimento e serviço prestado.<br>

      Sistema desenvolvido pelo Aluno da Faculdade Estácio de Araraquara: Claudinei Geraldo Bilcatti Júnior.
      </p>
      
    </form>
  </div>
</body>
</html>
