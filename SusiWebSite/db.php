<?php

$servername = "localhost";
$username = "root";
$password = "1234";

try {
	$pdo = new PDO("mysql:host=$servername;dbname=sinergia", $username, $password);

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
}
catch (PDOException $e){
	echo "A conexão falhou: " . $e->getMessage();
}

$sql = "SELECT * FROM sinergia_tab";
$result = $pdo->query($sql);
?>
