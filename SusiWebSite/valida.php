<?php
	session_start();

	$login = "susi";
	$senha = "3333";

	
	if (isset($_POST['login']) && $_POST['login'] == $login && isset($_POST['senha']) && $_POST['senha'] == $senha) { 
			$msgs = true;
			
		}
	

	if ($msgs){
		$_SESSION["logado"] = TRUE;
		$_SESSION["user"] = $_POST["login"];
		header("location:sinergia.php");
	}
	else{
		header("location:login.php");
		exit();
	}
?>