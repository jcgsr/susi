<?php
    
    session_start();

?>
  <link rel="stylesheet" href="style.css">

<?php
    if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE){
        header("Location: login.php");
    }  else{
        echo "<h1>Seja bem-vinda, " . $_SESSION["user"]."</h1>";
        echo "Gravar Novas Sinergias";
        
    }
?>


<form method="post" action="processa_sinergia.php"><br>
        <label for="">Data</label><br>
        <input type="date" name="datas" id="datas"><br>
        <label for="">Sinergia</label><br>
        <textarea name="sinergia" rows="4" cols="30"></textarea><br>        
        <label for="">Óleos Essencias</label><br>
        <textarea name="oleos" rows="4" cols="30"></textarea><br>        
        <label for="">Carreador</label><br>
        <textarea name="carreador" rows="4" cols="30"></textarea><br>        
        <label for="">Observação</label><br>
        <textarea name="obs" rows="4" cols="30"></textarea>
		
        <br><br>

        
        <input style="font-family: 'Berkshire Swash', cursive;" type="submit" name="submit" value="Gravar Sinergias"><br>
    </form> <br>
    <?php

    echo '<a href="tbl.php">Consultar Dados</a><br><br>';


    echo '<a href="logout.php">Logout</a><br>';


	 include 'footer.php';
 	?>
