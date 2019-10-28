<?php
	include_once("conexao.php");
	$nome_usuario = $_POST['nome'];
	$email_usuario = $_POST['email'];
	$matricula_usuario = $_POST['matricula'];
	$telefone_usu = $_POST['telefone'];
	$dp = $_POST['departamento'];
	$local = $_POST['andar'];
	$localidade = $_POST['localidade'];
	
	//echo "$nome_usuario - $email_usuario";
	
	$result_usuario = "INSERT INTO colaborador(nome, email, matricula, telefone, departamento, local, empresa) VALUES ('$nome_usuario','$email_usuario','$matricula_usuario','$telefone_usu', '$dp', '$local', '$localidade')";

	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ServiceDesk/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"Colaborador cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ServiceDesk/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"O Colaborador não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
?>

