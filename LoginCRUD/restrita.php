<?php

	session_start()

	if ( 
	(!isset($_SESSION['id'])==true)&&
	(!isset($_SESSION['nome']==true)&&
	(!isset($_SESSION['email'])==true))) {

	unset($_SESSION['id']);
	unset($_SESSION['nome']);
	unset($_SESSION['email']);
	header('location: index.html');
	}

 echo "PAGINA RESTRITA, MAS NÃO TÃO RESTRITA!!!!!!<br>";
 echo "ADO A ADO QUEM ENTRAR NESSA PAGINA PELO LOCALHOST É VIADO";
?>

<a href="sair.php">SAIR</a>