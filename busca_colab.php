<?php
include_once("conexao.php");
    
    $pesquisar = $_POST['pesquisa'];
    $result_colab = "SELECT * FROM colaborador WHERE email LIKE '$pesquisar'";
    $resultado_colab = mysqli_query($conn, $result_colab);
    
   while($rows_colab = mysqli_fetch_array($resultado_colab)){
        echo "Nome do colaborador: ".$rows_coalb['email']."<br>";
    }
    
?>