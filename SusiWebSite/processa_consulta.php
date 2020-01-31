
<link rel="stylesheet" href="style.css">

<a href="formulario_consulta.php" title="Formulário">Nova Consulta</a><br><br>

<table style="border: 2px solid #ccc; width: 100%">
	<tr>
        <th>ID</th>
        <th>Data</th>
        <th>Sinergia</th>
        <th>Óleos Essenciais</th>
        <th>Carreador</th>
        <th>Observação</th>
        
    </tr>

<?php
	include 'db.php';

	$id = $_POST['id'];

	$pdoQuery = "SELECT * FROM sinergia_tab WHERE id = :id";
	$pdoResult = $pdo->prepare($pdoQuery);
	$pdoExec = $pdoResult->execute(array(":id"=>$id));

	if ($pdoExec) {
		if ($pdoResult->rowCount()>0) {
			foreach ($pdoResult as $row) {
				
				echo '<tr><td>'.$row['id'].'</td>';
		        echo '<td>'.$row['datas'].'</td>';
		        echo '<td>'.$row['sinergia'].'</td>';
		        echo '<td>'.$row['oleos'].'</td>';
		        echo '<td>'.$row['carreador'].'</td>';
		        echo '<td>'.$row['obs'].'</td></tr>';
			}
		}
		
	 }else {
		echo "ERROR Dados Não Inseridos";
	}
?>  

<?php

	$id = "";
    $sinergia = "";
    $oleos = "";
    $carreador = "";
    $obs = "";
    $datas = "";

	include 'db.php';

	$sinergia = $_POST['sinergia'];

	$pdoQuery = "SELECT * FROM sinergia_tab WHERE sinergia = :sinergia";
	$pdoResult = $pdo->prepare($pdoQuery);
	$pdoExec = $pdoResult->execute(array(":sinergia"=>$sinergia));

	if ($pdoExec) {
		if ($pdoResult->rowCount()>0) {
			foreach ($pdoResult as $row) {
				
				echo '<tr><td>'.$row['id'].'</td>';
		        echo '<td>'.$row['datas'].'</td>';
		        echo '<td>'.$row['sinergia'].'</td>';
		        echo '<td>'.$row['oleos'].'</td>';
		        echo '<td>'.$row['carreador'].'</td>';
		        echo '<td>'.$row['obs'].'</td></tr>';
			}
		}
		
	 }else {
		echo "ERROR Dados Não Inseridos";
	}
?>  

<?php

	$id = "";
    $sinergia = "";
    $oleos = "";
    $carreador = "";
    $obs = "";
    $datas = "";

	include 'db.php';

	$oleos = $_POST['oleos'];

	$pdoQuery = "SELECT * FROM sinergia_tab WHERE oleos = :oleos";
	$pdoResult = $pdo->prepare($pdoQuery);
	$pdoExec = $pdoResult->execute(array(":oleos"=>$oleos));

	if ($pdoExec) {
		if ($pdoResult->rowCount()>0) {
			foreach ($pdoResult as $row) {
				
				echo '<tr><td>'.$row['id'].'</td>';
		        echo '<td>'.$row['datas'].'</td>';
		        echo '<td>'.$row['sinergia'].'</td>';
		        echo '<td>'.$row['oleos'].'</td>';
		        echo '<td>'.$row['carreador'].'</td>';
		        echo '<td>'.$row['obs'].'</td></tr>';
			}
		}
		
	 }else {
		echo "ERROR Dados Não Inseridos";
	}
?>  

<?php

	$id = "";
    $sinergia = "";
    $oleos = "";
    $carreador = "";
    $obs = "";
    $datas = "";

	include 'db.php';

	$carreador = $_POST['carreador'];

	$pdoQuery = "SELECT * FROM sinergia_tab WHERE carreador = :carreador";
	$pdoResult = $pdo->prepare($pdoQuery);
	$pdoExec = $pdoResult->execute(array(":carreador"=>$carreador));

	if ($pdoExec) {
		if ($pdoResult->rowCount()>0) {
			foreach ($pdoResult as $row) {
				
				echo '<tr><td>'.$row['id'].'</td>';
		        echo '<td>'.$row['datas'].'</td>';
		        echo '<td>'.$row['sinergia'].'</td>';
		        echo '<td>'.$row['oleos'].'</td>';
		        echo '<td>'.$row['carreador'].'</td>';
		        echo '<td>'.$row['obs'].'</td></tr>';
			}
		}
		
	 }else {
		echo "ERROR Dados Não Inseridos";
	}
?>


<?php
	echo '<a href="logout.php">Logout</a><br>';

	include 'footer.php';
?>


</table>
