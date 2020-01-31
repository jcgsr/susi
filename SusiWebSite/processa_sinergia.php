<?php

include 'db.php';


try {
	$sql = "INSERT INTO sinergia_tab (datas, sinergia, oleos, carreador, obs)
		  VALUES (:datas, :sinergia, :oleos, :carreador, :obs)";

	$stmt = $pdo->prepare($sql);

	$stmt->bindParam(':datas', $_REQUEST['datas']);
	$stmt->bindParam(':sinergia', $_REQUEST['sinergia']);
	$stmt->bindParam(':oleos', $_REQUEST['oleos']);
	$stmt->bindParam(':carreador', $_REQUEST['carreador']);
	$stmt->bindParam(':obs', $_REQUEST['obs']);
	
	$stmt->execute();

	echo "<br>Dados gravados com sucesso.";
} catch (PDOException $e){
	die("ERRO: $sql. " . $e->getMessage());
}

unset($pdo);
header('location:sinergia.php');
?>
