<!DOCTYPE html>
<html lang="en">
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

      else if (document.cadastro1.email.value.length <= 0){
        alert ("Digite um valor no campo: E-mail");
        document.cadastro1.estado.focus();
        return false;
      }

      else if (document.cadastro1.empresa.value.length <= 0){
        alert ("Digite um valor no campo: Empresa");
        document.cadastro1.estado.focus();
        return false;
      }

      else if (document.cadastro1.departamento.value.length <= 0){
        alert ("Digite um valor no campo: Departamento");
        document.cadastro1.estado.focus();
        return false;
      }

      else if (document.cadastro1.andar.value.length <= 0){
        alert ("Digite um valor no campo: Andar");
        document.cadastro1.estado.focus();
        return false;
      }

      else if (document.cadastro1.contato.value.length <= 0){
        alert ("Digite um valor no campo: Contato");
        document.cadastro1.estado.focus();
        return false;
      }

      else if (document.cadastro1.hr_trab.value.length <= 0){
        alert ("Digite um valor no campo: Horário");
        document.cadastro1.estado.focus();
        return false;
      }

      return true;
      }      
</script>

</head>

<body>
<!-- Slide -->
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
<!-- Slide -->


<!-- Menu -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="padding: 0%;">
  <a class="navbar-brand" href="#" style="padding-left: 2%; padding-right: 2%; border-right: 1px solid green; text-align: center;">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="active" href="cadastro.html">Cadastrar Colaborador</a>
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
        <a href="sobre.html">Sobre</a>
      </li>            
    </ul>
  </div>  
</nav>
<img src="imagens\linha.jpg" style="width: 100%; margin-bottom: 0%; float: left;">
<!-- Menu -->


<!-- Formulário -->
  <div class="header">
  <center><h2 style="margin-top: 3%; margin-bottom: 10%; font-size: 170%;">Cadastro</h2></center>
    <form>
      <label for="fname">Nome Completo</label>
      <input type="text" name="nome" placeholder="Digite o nome do colaborador.."><br><br>

      <label for="fname">E-mail</label>
      <input type="email"  name="email" placeholder="Digite o e-mail do colaborador.."><br><br>

      <label for="fname">Matrícula</label>
      <input type="text"  name="matricula" placeholder="Digite a matrícula do colaborador.."><br><br>

      <label for="fname">Telefone Corporativo</label>
      <input type="text"  name="telefone" placeholder="Digite o telefone do colaborador.."><br><br>

      <label for="fname">Departamento</label>
      <input type="text"  name="departamento" placeholder="Digite o departamento do colaborador.."><br><br>

      <label for="fname">Andar ou Referência</label>
      <input type="text" name="andar" placeholder="Digite detalhes do local do colaborador.."><br><br>

<label for="country">Localidade</label>
      <select  name="localidade">
         <option value="">Localidade</option>
          <option value="SC | Brazul Araquari">SC | Brazul Araquari</option>
          <option value="PE | Brazul Cabo de Santo Agostinho">PE | Brazul Cabo de Santo Agostinho</option>
          <option value="SP | Brazul Caçapava">SP | Brazul Caçapava</option>
          <option value="BA | Brazul Camaçari">BA | Brazul Camaçari</option>
          <option value="RS | Brazul Gravatai">RS | Brazul Gravatai</option>
          <option value="RS | Brazul Guaiba">RS | Brazul Guaiba</option>
          <option value="SP | Brazul Indaiatuba">SP | Brazul Indaiatuba</option>
          <option value="SC | Brazul Itajai">SC | Brazul Itajai</option>
          <option value="RJ | Brazul Porto Real">RJ | Brazul Porto Real</option>
          <option value="RJ | Brazul Rio">RJ | Brazul Rio</option>
          <option value="RS | Brazul Rio Grande">RS | Brazul Rio Grande</option>
          <option value="SP | Brazul São Bernardo">SP | Brazul São Bernardo</option>
          <option value="SP | Brazul SBC Matriz">SP | Brazul SBC Matriz</option>
          <option value="SP | Brazul SBC P/ Anchieta">SP | Brazul SBC P/ Anchieta</option>
          <option value="SP | Brazul SBC P/ Apoio">SP | Brazul SBC P/ Apoio</option>
          <option value="SP | Brazul SCS P/ Crecco">SP | Brazul SCS P/ Crecco</option>
          <option value="SP | Brazul São José dos Campos">SP | Brazul São José dos Campos</option>
          <option value="PR | Brazul São José dos Pinhais">PR | Brazul São José dos Pinhais</option>
          <option value="ES | Brazul Serra">ES | Brazul Serra</option>
          <option value="SP | Brazul Sorocaba Toyo">SP | Brazul Sorocaba Toyo</option>
          <option value="MG | Deva Betim Matriz">MG | Deva Betim Matriz</option>
          <option value="MG | Deva Ibirite">MG | Deva Ibirite</option>
          <option value="MG | Deva Itabira">MG | Deva Itabira</option>
          <option value="MG | Deva Juiz de Fora">MG | Deva Juiz de Fora</option>
          <option value="MG | Deva Montes Claros">MG | Deva Montes Claros</option>
          <option value="MG | Deva Pouso Alegre">MG | Deva Pouso Alegre</option>
          <option value="MG | EberBio Matriz">MG | EberBio Matriz</option>
          <option value="MG | OMR Sete Lagoas">MG | OMR Sete Lagoas</option>
          <option value="PA | Sada Belem">PA | Sada Belem</option>
          <option value="MG | Sada Betim AutoService">MG | Sada Betim AutoService</option>
          <option value="MG | Sada Betim Matriz">MG | Sada Betim Matriz</option>
          <option value="RJ | Sada Duque de Caxias">RJ | Sada Duque de Caxias</option>
          <option value="MG | Sada Extrema">MG | Sada Extrema</option>
          <option value="PE | Sada Goiana Car">PE | Sada Goiana Car</option>
          <option value="PE | Sada Goiana Jeep">PE | Sada Goiana Jeep</option>
          <option value="MG | Igarape Carreteiro">MG | Igarape Carreteiro</option>
          <option value="MG | Sada Igarape PDV">MG | Sada Igarape PDV</option>
          <option value="RJ | Sada Itaguai">RJ | Sada Itaguai</option>
          <option value="RJ | Sada Itatiaia">RJ | Sada Itatiaia</option>
          <option value="AM | Sada Manaus">AM | Sada Manaus</option>
          <option value="RJ | Sada Caju">RJ | Sada Caju</option>
          <option value="RJ | Sada Porto Rio">RJ | Sada Porto Rio</option>
          <option value="RJ | Sada PSA">RJ | Sada PSA</option>
          <option value="SP | Sada São Bernardo DO">SP | Sada São Bernardo DO</option>
          <option value="MG | Sada Sete Lagoas">MG | Sada Sete Lagoas</option>
          <option value="MG | Sada Varzea da Palma">MG | Sada Varzea da Palma</option>
          <option value="MG | Sada Bio Carbonita">MG | Sada Bio Carbonita</option>
          <option value="MG | Sada Bio Jaiba Matriz">MG | Sada Bio Jaiba Matriz</option>
          <option value="MG | Sempre Belo Horizonte">MG | Sempre Belo Horizonte</option>
          <option value="MG | Sempre Betim">MG | Sempre Betim</option>
          <option value="MG | Sempre Contagem">MG | Sempre Contagem</option>
          <option value="MG | Siderurgia VP">MG | Siderurgia VP</option>
          <option value="GO | Transzero Catalao">GO | Transzero Catalao</option>
          <option value="PE | Transzero Ipojuca">PE | Transzero Ipojuca</option>
          <option value="SP | Transzero Jacaré">SP | Transzero Jacaré</option>
          <option value="SP | Transzero Santos">SP | Transzero Santos</option>
          <option value="SP | Transzero SBC Alvarenga">SP | Transzero SBC Alvarenga</option>
          <option value="SP | Transzero SBC Matriz">SP | Transzero SBC Matriz</option>
          <option value="SP | Transzero São José dos Campos">SP | Transzero São José dos Campos</option>
          <option value="PR | Transzero São José dos Pinhais">PR | Transzero São José dos Pinhais</option>
      </select>

      <br><br>
      <center><input type="reset" value="Limpar">
      <button type="submit" class="button" name="cadastrar" id="cadastrar" value="Enviar"><span>Cadastrar </span></button></center>
    </form>
  </div>
<!-- Formulário -->


<!-- Rodapé -->
  <img src="imagens\linha.jpg" style="width: 100%; margin-bottom: 0%; float: left;">
<div class="footer">
  <img src="imagens\rodape.png" style="width: 100%; float: left;">
</div>
<!-- Rodapé -->

</body>
</html>
