<?php
    
    session_start();
    /*style="border: 2px solid #ccc; width: 100%" estilo para a tabela*/

?>
<link rel="stylesheet" href="style.css">

<?php
     if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE){
        header("Location: login.php");
    }  else{
        echo "<h1>Seja bem-vinda, " . $_SESSION["user"]."</h1>";
        echo "<br>";
        echo "<h2>O que deseja consultar?<h2><br>";
        echo '<a href="logout.php">Logout</a><br><br>';
        echo '<a href="sinergia.php">Inserir Novo Dado</a>';
    }
?>


    <h1>Tabela Completa de Dados</h1>
    <br><br>

    <table id="myTable" style="font-family: Arial;" >
	
        <thead>
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Sinergia</th>
                <th>Óleos Essenciais</th>
                <th>Carreador</th>
                <th>Observação</th>
                
            </tr>
        </thead>

        <tbody>

            <?php
                include 'db.php';

                $id = "";
                $sinergia = "";
                $oleos = "";
                $carreador = "";
                $obs = "";
                $datas = "";

                $pdoQuery = "SELECT * FROM sinergia_tab";
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
        </tbody>
</table>

<?php
	include 'footer.php';
?>
