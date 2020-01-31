 <link rel="stylesheet" href="style.css">

  <h1>Susi Pessôa</h1>
  <h2>Terapeuta Integrativa</h2>
  <img id="susi" src="images/susi.jpg" alt="Foto de Susi">

        

  <form name='form' action='valida.php' method='post'>

    <label>Login</label><br><input type='text' name='login' id="login" /><br>
    
    <label>Senha</label><br><input type='password' name='senha' id="senha" /><br><br>
   
    <button type="submit" style="font-family: 'Berkshire Swash', cursive;">LOGIN</button>
  </form>
  <br>
  <a href="index.php" title="home">HOME</a>
 	<br>

<?php

	include 'footer.php';
?>