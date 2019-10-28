<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
<title>Login</title>
<link rel = "shortcut icon" type = "imagem/x-icon" href = "imagens\logo.png"/>

<style>

body {
  margin: 0;
  padding: 0;
  width:100%;
}

img {
  width: 100%;
  float: left;
}

label {
  font-size: 12pt;
  font-family: calibri;
  font-weight: normal;
  color: white;
}


/* Formulario */

table, th {

}

input[type=submit] {
  width: 100%;
  border-radius: 4px;
  background-color: #006600;
  border: none;
  color: white;
  text-align: center;
  font-size: 11pt;
  margin-top: 2%;
}

input[type=text], select {
  width: 100%;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  float: left;
  margin-top: 1%;
}

input[type=password], select {
  width: 100%;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  float: left;
  margin-top: 1%;
}

input[type=submit]:hover {
  background-color: #009933;
}


* {
  box-sizing: border-box;
}
.menu {

}
.menuitem {
  padding: 8px;
  margin-top: 7px;
  border-bottom: 1px solid #f1f1f1;
}
.main {
  float: left;
  width: 100%;
  overflow: hidden;
}



</style>

</head>
<body bgcolor="#1a1a1a">
  <div class="menu" style="background-color:#333">
    <form method="POST" action="valida.php"> 
      <table>
        <tr>
          <th style="width: 8%;"><a href=http://gruposada.com.br><img src="imagens\logo.png"></a></th>
          <th style="width: auto;"></th>
          <th style="width: 5%; padding: 1%;"><label>Login:</label></th>
          <th style="width: 25%; padding-right: 1%;"><input type="text" name="usuario"></th>
          <th style="width: 5%; padding: 1%;"><label>Senha:</label></th>
          <th style="width: 25%; padding-right: 1%;"><input type="password" name="senha"></th>
          <th style="width: 6%; padding-right: 1%;"><input type="submit" value="Entrar" id="entrar" name="entrar"></th>
        </tr>
      </table>
    </form>
  </div>

  <img src="imagens\linha.jpg" style="width: 100%; margin-bottom: 0%;">
 
  <div class="main">
    <img src="imagens\stefanini.jfif" style="width: 100%;">
  </div>

  <img src="imagens\linha.jpg" style="width: 100%; margin-bottom: 0%;">


<div><img src="imagens\rodape.png" style="width: 100%; float: left; margin-bottom: 0%;"></div>

</body>
</html>
    