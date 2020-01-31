<?php
    
    session_start();

?>
  <link rel="stylesheet" href="style.css">

<?php
    if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE){
        header("Location: login.php");
    }  else{
        echo "<h1>O que deseja consultar, " . $_SESSION["user"]."?</h1>";
        echo "<h2>PÁGINA DE COLSULTA<h2><br><br>";
        
    }
    $id = "";
    $sinergia = "";
    $oleos = "";
    $carreador = "";
    $obs = "";
    $datas = "";
  ?>



<form action="processa_consulta.php" method="post">
	ID: <input type="text" name="id" value="<?php echo $id;?>"><br><br>
	Sinergia: <input type="text" name="sinergia" value="<?php echo $sinergia;?>"><br><br>
	Óleos Essenciais: <input type="text" name="oleos" value="<?php echo $oleos;?>"><br><br>
	Carreador: <input type="text" name="carreador" value="<?php echo $carreador;?>"><br><br>
	Observação: <input type="text" name="obs" value="<?php echo $obs;?>"><br><br>
	
	
	<input type="submit" name="Procurar" value="Procurar Dados" style="font-family: 'Berkshire Swash', cursive;" > <br><br>

	<a href="/SusiWebSite/tbl.php" title="Tabela Completa">Todos os Dados</a>

</form>

<?php
    echo '<a href="logout.php">Logout</a><br>';


     include 'footer.php';
?>
