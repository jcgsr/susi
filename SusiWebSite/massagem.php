<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Massagens</title>

    <title>Susi Terapias Holísticas</title>
</head>
<body>
    <main>
    <header>
        <nav class="navbar" style="color: blueviolet;">
            <a href="#contato">Contato</a>
            <a href="#container">Terapias</a>
            <a href="#sobre">Sobre</a>
            <a href="index.html">Home</a>
        </nav>

        <h1>Susi Pessôa</h1>
        <h2>Terapeuta Integrativa</h2>
        
    </header>
    <img id="susi" src="images/susi.jpg" alt="Foto de Susi">
    <br><br>
    <h2>Massagens</h2>

    

    <p id="date"></p>
    <hr>
    <footer>
            &copy; 2019, Susi Pessôa <br>
            Terapeuta Integrativa - Terapias Holísticas.
    </footer>

    <script>
        let today = new Date();
        let formatDate = today.toDateString();
        let selectElement = document.getElementById('date');
        selectElement.innerHTML = formatDate;
    </script>
    
</body>
</html>
