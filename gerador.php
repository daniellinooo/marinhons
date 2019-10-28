<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Gerador de Scripts</title>
<link rel = "shortcut icon" type = "imagem/x-icon" href = "imagens\logo.png"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" type="text/css" href="cadastro.css"/>

<link rel = "stylesheet" type="text/css" href="gerador.css"/>

<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script type="text/javascript">
function Verificar(){
			if(document.cadastro1.matricula.value.length <= 0){
				alert ("Digite um valor no campo: Matricula");
				document.cadastro1.nome.focus();
				return false;
			}

			else if (document.cadastro1.nome.value.length <= 0){
				alert ("Digite um valor no campo: Nome");
				document.cadastro1.cidade.focus();
				return false;
			}		
</script>

<script>
  function copiarTexto() {
    var textoCopiado = document.getElementById("link");
    textoCopiado.select();
    document.execCommand("Copy");
  }
</script>

<script>
function limpa() {
if(document.getElementById('subject').value!="") {
document.getElementById('subject').value="";

}
}
</script>

</head>

<body>
<div class="w3-content w3-section" style="max-width: 100%;">
  <img class="mySlides" src="imagens/img2.jpg">
  <img class="mySlides" src="imagens/img5.jpg">
  <img class="mySlides" src="imagens/img1.jpg">
  <img class="mySlides" src="imagens/img3.jpg">
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
        <a class="active" href="gerador.php">Gerador de Script</a>
      </li>
      <li class="nav-item">
        <a class="" href="#">Remover Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="" href="#">Scripts Recorrentes</a>
      </li>
      <li class="nav-item">
        <a class="" href="#">Gráficos de Desempenho</a>
      </li>
      <li class="nav-item">
        <a class="" href="sair.php">Deslogar</a>
      </li>
      <li class="nav-item">
        <a href="sobre.php">Sobre</a>
      </li>            
    </ul>
  </div>  
</nav>
   
  <img src="imagens\linha.jpg" style="width: 100%; margin-bottom: 0%; float: left;">

<div class="card">

  <div class="header">
    <br>
    <center><h2 style="margin-top: 3%; margin-bottom: 5%; font-size: 170%;">Buscar Script</h2></center>
    <form method="POST" action="gerador.php">
    <center>
        <input type="email" name="email" Placeholder="Insira o e-mail do colaborador..">
   
   <div class="col-75">
    <textarea id="link" name="subject" style="height:250px">
         <?php
    $SendPesqUser = filter_input(INPUT_POST, 'Gerar', FILTER_SANITIZE_STRING);
    if($SendPesqUser){
      $nome = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
      $result_usuario = "SELECT * FROM colaborador WHERE email LIKE '%$nome'";
      $resultado_usuario = mysqli_query($conn, $result_usuario);
      while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
        echo "Nome: " . $row_usuario['nome']."\n";
        echo "E-mail: " . $row_usuario['email'] . "\n";
        echo "Matricula: " . $row_usuario['matricula'] . "\n";
        echo "telefone: " . $row_usuario['telefone'] . "\n";
        echo "Departamento: " . $row_usuario['departamento'] . "\n";
        echo "Andar ou Referência: " . $row_usuario['local'] . "\n";
        echo "Empresa: " . $row_usuario['empresa'] . "\n";
        echo "Descrição do Problema:";
        
      }
    }
    ?>
    
    </textarea>
    </div>

    <br><br>
    <button class="button" onClick="copiarTexto()">Copiar Texto</button>
    <button class="button" onClick="limpa()">Limpar</button>
    <input class="button" type="submit" name="Gerar" value="Gerar">
    </center>
    </form>

  </div>
</div>


<img src="imagens\linha.jpg" style="width: 100%; margin-bottom: 0%; float: left;">
<div class="footer">
  <img src="imagens\rodape.png" style="width: 100%; float: left;">
</div>


</body>	
</html>