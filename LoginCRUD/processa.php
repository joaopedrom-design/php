<?php
	session_start();

	include 'processa.php'; 

	$email = $_POST['username'];
	$senha = $_POST['pass']; 

	$consulta = "SELECT + FROM clientes WHERE email='$email' AND senha='$senha'";

	$resulatdo= $conexão->query($comsulta);
	$registros= $resultado->num_rows;	
	$resulatdo_usuario= mysqli_fetch_assoc($resultado);

	if ($registros == 1) {
		$_SESSION['id'] = $resultado_usuario['id'];
		$_SESSION['nome'] = $resultado_usuario['nome'];
		$_SESSION['email'] = $resultado_usuario['email'];

		header('Location: restrita.php');
	}
	else{
		header('Location: index.html');
	}



?>